<?php
declare(strict_types=1);

const SITE_NAME = 'Mark’s Services LLC';
const BUSINESS_NAME = 'Mark’s Services LLC';
const BUSINESS_EMAIL = 'info@MarksServices.com';
const BUSINESS_PHONE_DISPLAY = '(512) 549-0322';
const BUSINESS_PHONE_TEL = '+15125490322';
const BUSINESS_CITY = 'Berry Creek';
const BUSINESS_STATE = 'TX';
const BUSINESS_ZIP = '78628';
const BUSINESS_AREA = 'Berry Creek & Sun City, Texas';
const BUSINESS_AREA_DETAIL = 'Berry Creek (78628) and Sun City, Texas';
const BUSINESS_ADDRESS_DISPLAY = 'Client-location service in ' . BUSINESS_AREA_DETAIL;
const BUSINESS_SERVICE_NOTE = 'Client-location service only in Berry Creek and Sun City.';
const ELECTRICAL_LICENSE = 'TECL 20547';
const PLUMBING_LICENSE = 'M-38601';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function url_for(string $path): string
{
    return $path;
}

function is_active(string $current, array|string $targets): string
{
    $targets = (array) $targets;
    return in_array($current, $targets, true) ? 'active' : '';
}

function site_base_url(): string
{
    $host = $_SERVER['HTTP_HOST'] ?? 'webtestkit.com';
    $https = $_SERVER['HTTPS'] ?? '';
    $scheme = ($https !== '' && $https !== 'off') ? 'https' : 'http';
    $script = $_SERVER['SCRIPT_NAME'] ?? '/mark/index.php';
    $basePath = rtrim(str_replace('\\', '/', dirname($script)), '/');

    if ($basePath === '' || $basePath === '.') {
        $basePath = '';
    }

    return $scheme . '://' . $host . $basePath;
}

function absolute_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    return rtrim(site_base_url(), '/') . ($path === '' ? '/' : '/' . $path);
}

function page_url(string $pageKey): string
{
    return absolute_url($pageKey === 'index.php' ? '' : $pageKey);
}

function business_area_schema(): array
{
    return [
        [
            '@type' => 'Place',
            'name' => 'Berry Creek',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Berry Creek',
                'addressRegion' => BUSINESS_STATE,
                'postalCode' => BUSINESS_ZIP,
                'addressCountry' => 'US',
            ],
        ],
        [
            '@type' => 'Place',
            'name' => 'Sun City',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Sun City',
                'addressRegion' => BUSINESS_STATE,
                'addressCountry' => 'US',
            ],
        ],
    ];
}

function service_offer(string $name, string $description): array
{
    return [
        '@type' => 'Offer',
        'areaServed' => business_area_schema(),
        'itemOffered' => [
            '@type' => 'Service',
            'name' => $name,
            'description' => $description,
            'provider' => [
                '@id' => absolute_url('#business'),
            ],
            'areaServed' => business_area_schema(),
        ],
    ];
}

function structured_data_for_page(string $pageKey, array $page): array
{
    $businessId = absolute_url('#business');
    $websiteId = absolute_url('#website');
    $webpageId = page_url($pageKey) . '#webpage';

    return [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => ['HomeAndConstructionBusiness', 'Electrician', 'Plumber'],
                '@id' => $businessId,
                'name' => BUSINESS_NAME,
                'url' => absolute_url(),
                'logo' => absolute_url('assets/img/favicon/logo_master_enhanced.png'),
                'image' => absolute_url('assets/img/construction/showcase-3.webp'),
                'email' => BUSINESS_EMAIL,
                'telephone' => BUSINESS_PHONE_TEL,
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => BUSINESS_CITY,
                    'addressRegion' => BUSINESS_STATE,
                    'postalCode' => BUSINESS_ZIP,
                    'addressCountry' => 'US',
                ],
                'priceRange' => '$$',
                'description' => 'Licensed electrical, plumbing, remodeling, carpentry, maintenance, and punch-list service at client locations in ' . BUSINESS_AREA_DETAIL . '.',
                'areaServed' => business_area_schema(),
                'contactPoint' => [
                    [
                        '@type' => 'ContactPoint',
                        'telephone' => BUSINESS_PHONE_TEL,
                        'email' => BUSINESS_EMAIL,
                        'contactType' => 'customer service',
                        'areaServed' => business_area_schema(),
                        'availableLanguage' => 'en-US',
                    ],
                ],
                'knowsAbout' => [
                    'Electrical service',
                    'Plumbing service',
                    'Remodeling',
                    'Carpentry',
                    'Home maintenance',
                    'Punch lists',
                    'Make-ready work',
                ],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Home services in ' . BUSINESS_AREA,
                    'itemListElement' => [
                        service_offer('Licensed Electrical Service', 'Troubleshooting, fixtures, devices, circuits, and electrical repairs.'),
                        service_offer('Licensed Plumbing Service', 'Leaks, fixtures, shutoffs, water heaters, and plumbing repairs.'),
                        service_offer('Remodeling and Carpentry', 'Bathrooms, kitchens, trim, doors, finish work, and small remodel scopes.'),
                        service_offer('Maintenance and Punch Lists', 'Client-location repair visits, make-ready work, and finish-the-list tasks.'),
                    ],
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => $websiteId,
                'url' => absolute_url(),
                'name' => SITE_NAME,
                'publisher' => [
                    '@id' => $businessId,
                ],
                'inLanguage' => 'en-US',
            ],
            [
                '@type' => 'WebPage',
                '@id' => $webpageId,
                'url' => page_url($pageKey),
                'name' => $page['title'] ?? SITE_NAME,
                'description' => $page['description'] ?? '',
                'isPartOf' => [
                    '@id' => $websiteId,
                ],
                'about' => [
                    '@id' => $businessId,
                ],
                'inLanguage' => 'en-US',
            ],
        ],
    ];
}
