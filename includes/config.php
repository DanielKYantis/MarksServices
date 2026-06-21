<?php
declare(strict_types=1);

const SITE_NAME = "Mark's Services";
const BUSINESS_NAME = "Mark's Services";
const BUSINESS_EMAIL = "office@marksservices.com";
const BUSINESS_PHONE_DISPLAY = "(512) 549-0322";
const BUSINESS_PHONE_TEL = "+15125490322";
const BUSINESS_CITY = "Georgetown";
const BUSINESS_STATE = "TX";
const BUSINESS_ZIP = "78633";
const BUSINESS_AREA = "Sun City & Berry Creek, Georgetown, Texas";
const BUSINESS_AREA_DETAIL =
    "Sun City, Georgetown, Williamson County 78633; Berry Creek, Georgetown, Williamson County 78628; and Georgetown 78626 and 78627";
const BUSINESS_ADDRESS_DISPLAY =
    "Client-location service in " . BUSINESS_AREA_DETAIL;
const BUSINESS_SERVICE_NOTE =
    "Client-location service in Sun City, Georgetown 78633 and Berry Creek, Georgetown 78628, Williamson County.";
const ELECTRICAL_LICENSE = "TECL 20547";
const ELECTRICAL_LICENSE_HOLDER = "Larry Kizer";
const PLUMBING_LICENSE = "M-38601";
const PLUMBING_LICENSE_HOLDER = "James Pote (Jim) Bradford";
const HANDYMAN_EXPERT = "Mark Walbert";
const HANDYMAN_EXPERIENCE = "25+ years";
const HANDYMAN_PRIOR_TRADE_EXPERIENCE =
    "20 years previously licensed in electrical and plumbing; those licenses are expired";

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

function url_for(string $path): string
{
    return $path;
}

function is_active(string $current, array|string $targets): string
{
    $targets = (array) $targets;
    return in_array($current, $targets, true) ? "active" : "";
}

function site_base_url(): string
{
    $host = $_SERVER["HTTP_HOST"] ?? "www.marksservices.com";
    $https = $_SERVER["HTTPS"] ?? "";
    $scheme = $https !== "" && $https !== "off" ? "https" : "http";
    $script = $_SERVER["SCRIPT_NAME"] ?? "/index.php";
    $basePath = rtrim(str_replace("\\", "/", dirname($script)), "/");

    if ($basePath === "" || $basePath === ".") {
        $basePath = "";
    }

    return $scheme . "://" . $host . $basePath;
}

function absolute_url(string $path = ""): string
{
    $path = ltrim($path, "/");
    return rtrim(site_base_url(), "/") . ($path === "" ? "/" : "/" . $path);
}

function page_url(string $pageKey): string
{
    return absolute_url($pageKey === "index.php" ? "" : $pageKey);
}

function service_area_place_schema(string $name, string $postalCode): array
{
    return [
        "@type" => "Place",
        "name" => $name,
        "address" => [
            "@type" => "PostalAddress",
            "addressLocality" => "Georgetown",
            "addressRegion" => BUSINESS_STATE,
            "postalCode" => $postalCode,
            "addressCountry" => "US",
        ],
    ];
}

function business_area_schema(): array
{
    return [
        service_area_place_schema(
            "Sun City, Georgetown, Williamson County, TX 78633",
            BUSINESS_ZIP
        ),
        service_area_place_schema(
            "Berry Creek, Georgetown, Williamson County, TX 78628",
            "78628"
        ),
        service_area_place_schema("Georgetown, TX 78626", "78626"),
        service_area_place_schema("Georgetown, TX 78627", "78627"),
    ];
}

function service_offer(string $name, string $description): array
{
    return [
        "@type" => "Offer",
        "areaServed" => business_area_schema(),
        "itemOffered" => [
            "@type" => "Service",
            "name" => $name,
            "description" => $description,
            "provider" => [
                "@id" => absolute_url("#business"),
            ],
            "areaServed" => business_area_schema(),
        ],
    ];
}

function structured_data_for_page(string $pageKey, array $page): array
{
    $businessId = absolute_url("#business");
    $websiteId = absolute_url("#website");
    $webpageId = page_url($pageKey) . "#webpage";

    $webPage = [
        "@type" => "WebPage",
        "@id" => $webpageId,
        "url" => page_url($pageKey),
        "name" => $page["title"] ?? SITE_NAME,
        "description" => $page["description"] ?? "",
        "isPartOf" => [
            "@id" => $websiteId,
        ],
        "about" => [
            "@id" => $businessId,
        ],
        "inLanguage" => "en-US",
    ];

    if (isset($page["service_area"]) && is_array($page["service_area"])) {
        $webPage["contentLocation"] = $page["service_area"];
    }

    $serviceNode = null;
    if (isset($page["service_name"], $page["service_description"])) {
        $serviceId = page_url($pageKey) . "#service";
        $webPage["mainEntity"] = [
            "@id" => $serviceId,
        ];
        $serviceNode = [
            "@type" => "Service",
            "@id" => $serviceId,
            "name" => $page["service_name"],
            "description" => $page["service_description"],
            "url" => page_url($pageKey),
            "provider" => [
                "@id" => $businessId,
            ],
            "areaServed" => business_area_schema(),
        ];
    }

    $structuredData = [
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => [
                    "HomeAndConstructionBusiness",
                    "Electrician",
                    "Plumber",
                ],
                "@id" => $businessId,
                "name" => BUSINESS_NAME,
                "url" => absolute_url(),
                "logo" => absolute_url(
                    "assets/img/favicon/logo_master_enhanced.png"
                ),
                "image" => absolute_url(
                    "assets/img/construction/showcase-3.webp"
                ),
                "email" => BUSINESS_EMAIL,
                "telephone" => BUSINESS_PHONE_TEL,
                "priceRange" => '$$',
                "description" =>
                    "Licensed electrical and plumbing, handyman repairs, home repair, water softener installation, maintenance, and punch-list service at client locations in " .
                    BUSINESS_AREA_DETAIL .
                    ".",
                "areaServed" => business_area_schema(),
                "contactPoint" => [
                    [
                        "@type" => "ContactPoint",
                        "telephone" => BUSINESS_PHONE_TEL,
                        "email" => BUSINESS_EMAIL,
                        "contactType" => "customer service",
                        "areaServed" => business_area_schema(),
                        "availableLanguage" => "en-US",
                    ],
                ],
                "knowsAbout" => [
                    "Electrical service",
                    "Plumbing service",
                    "Handyman service",
                    "Home repair",
                    "Water softener installation",
                    "Fixture replacement",
                    "Ceiling fans",
                    "Lighting",
                    "Doors and trim repair",
                    "Drywall repair",
                    "Home maintenance",
                    "Punch lists",
                    "Make-ready work",
                ],
                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => "Home services in " . BUSINESS_AREA,
                    "itemListElement" => [
                        service_offer(
                            "Licensed Electrical Service",
                            "Troubleshooting, fixtures, devices, circuits, and electrical repairs."
                        ),
                        service_offer(
                            "Licensed Plumbing Service",
                            "Leaks, fixtures, shutoffs, water heaters, water softener installation, and plumbing repairs."
                        ),
                        service_offer(
                            "Handyman and Home Repair",
                            "Doors, trim, drywall, fixtures, repairs, and finish-the-list tasks."
                        ),
                        service_offer(
                            "Maintenance and Punch Lists",
                            "Client-location repair visits, make-ready work, and punch-list tasks."
                        ),
                    ],
                ],
            ],
            [
                "@type" => "WebSite",
                "@id" => $websiteId,
                "url" => absolute_url(),
                "name" => SITE_NAME,
                "publisher" => [
                    "@id" => $businessId,
                ],
                "inLanguage" => "en-US",
            ],
            $webPage,
        ],
    ];

    if ($serviceNode !== null) {
        $structuredData["@graph"][] = $serviceNode;
    }

    return $structuredData;
}
