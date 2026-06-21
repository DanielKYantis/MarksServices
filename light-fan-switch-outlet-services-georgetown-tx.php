<?php
declare(strict_types=1);

$pageKey = 'light-fan-switch-outlet-services-georgetown-tx.php';
$servicePage = [
    'h1' => 'Light, Fan, Switch and Outlet Services in Georgetown, TX',
    'breadcrumb' => 'Light, Fan & Outlet Services',
    'eyebrow' => 'Sun City 78633 • Berry Creek 78628 • Williamson County',
    'intro_title' => 'Electrical fixture and device service for Georgetown homes',
    'lead' => "Mark's Services supports lighting, ceiling fans, switches, outlets, GFCIs, doorbells, and related residential devices through the verified current Electrical Contractor.",
    'intro_paragraphs' => [
        'Fixture and device work begins with the existing wiring, box, circuit, mounting, location, equipment instructions, and the symptom or upgrade the homeowner wants to address.',
        'Exterior-visible devices, new circuits, EV chargers, panels, surge equipment, and permit-sensitive work require additional review before scope or scheduling is confirmed.',
    ],
    'credential' => [
        'title' => 'Verified current electrical credential',
        'lines' => [
            ELECTRICAL_LICENSE_HOLDER,
            'Electrical Contractor ' . ELECTRICAL_LICENSE,
        ],
        'note' => 'Electrical claims and regulated scope are tied to this verified current credential, not to Mark Walbert’s expired prior licenses.',
    ],
    'scope_title' => 'Electrical fixture and device scope',
    'scope_intro' => 'The page focuses on approved residential fixtures and devices rather than unrestricted major electrical claims.',
    'scope_groups' => [
        [
            'icon' => 'bi-lightbulb',
            'title' => 'Interior and exterior lighting',
            'items' => [
                'Light fixtures, LED replacements, pendants, and wall sconces',
                'Garage lights and high-reach light replacement',
                'Exterior security lighting subject to property requirements',
                'Fixture, mounting, box, and manufacturer review',
            ],
        ],
        [
            'icon' => 'bi-fan',
            'title' => 'Ceiling fans and related controls',
            'items' => [
                'Ceiling-fan installation and replacement',
                'Fan controls, wall switches, and compatible dimmers',
                'Existing support-box and mounting-condition review',
                'Bathroom fan or vent-device repair without HVAC system service',
            ],
        ],
        [
            'icon' => 'bi-toggle-on',
            'title' => 'Switches, outlets, and safety devices',
            'items' => [
                'Light-switch, dimmer, outlet, and GFCI replacement',
                'Smoke-detector installation and replacement',
                'Doorbell and video-doorbell installation or repair',
                'Media or TV outlet assistance and device troubleshooting',
            ],
        ],
        [
            'icon' => 'bi-ev-station',
            'title' => 'Smart devices and coordinated upgrades',
            'items' => [
                'Smart locks, security cameras, and security panels',
                'Whole-house surge-protector coordination when properly licensed',
                'EV-charger or EV-station coordination and installation review',
                'Circuit, panel, permit, utility, and manufacturer coordination as needed',
            ],
        ],
    ],
    'planning_title' => 'Share the existing condition and the new device',
    'planning_paragraphs' => [
        'Provide a photo of the existing fixture or device, the wall or ceiling location, the replacement model, and any known symptoms. That information helps identify mounting, wiring, access, compatibility, and permit questions.',
        'The website does not market HVAC equipment service, gas work, or unrestricted panel and circuit work. Regulated electrical work is scoped through the verified current Electrical Contractor.',
    ],
    'requirements_note' => 'Exterior devices, conduit, lighting, cameras, video doorbells, and EV chargers may require HOA, permit, utility, and manufacturer review.',
    'related_services' => [
        ['href' => 'handyman-services-sun-city-georgetown.php', 'label' => 'Handyman Services', 'description' => 'Related wall, trim, mounting, and finish repairs.'],
        ['href' => 'grab-bar-installation-sun-city-georgetown.php', 'label' => 'Home Safety Installs', 'description' => 'Grab bars, safety hardware, and high-reach replacements.'],
        ['href' => 'home-inspection-punch-list-repairs-georgetown-tx.php', 'label' => 'Inspection & Punch Lists', 'description' => 'Coordinate electrical devices with other repair items.'],
    ],
];

require __DIR__ . '/includes/service-landing-page.php';
