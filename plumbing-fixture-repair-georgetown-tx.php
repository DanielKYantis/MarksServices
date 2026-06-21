<?php
declare(strict_types=1);

$pageKey = 'plumbing-fixture-repair-georgetown-tx.php';
$servicePage = [
    'h1' => 'Plumbing Fixture Repair in Georgetown, TX',
    'breadcrumb' => 'Plumbing Fixture Repair',
    'eyebrow' => 'Sun City 78633 • Berry Creek 78628 • Williamson County',
    'intro_title' => 'Faucet, sink, toilet, drain, and fixture help',
    'lead' => "Mark's Services supports plumbing fixture repairs and replacements for Sun City, Berry Creek, and Georgetown homeowners through the verified current plumbing credential.",
    'intro_paragraphs' => [
        'Common requests include dripping faucets, loose or damaged fixtures, toilet tank components, disposal replacement, drain hardware, dishwasher connections, bidets, hose bibs, and minor visible leaks.',
        'The active issue, shutoff access, fixture condition, materials, and code or permit requirements are reviewed before a repair or replacement path is confirmed.',
    ],
    'credential' => [
        'title' => 'Verified current plumbing credential',
        'lines' => [
            PLUMBING_LICENSE_HOLDER,
            'Responsible Master Plumber ' . PLUMBING_LICENSE,
        ],
        'note' => 'Use this credential only for appropriate plumbing scope. It does not support HVAC, gas, roofing, or unrelated construction claims.',
    ],
    'scope_title' => 'Plumbing fixture service scope',
    'scope_intro' => 'The visible service list and page schema cover the same approved fixture and minor-repair categories.',
    'scope_groups' => [
        [
            'icon' => 'bi-droplet',
            'title' => 'Faucets, sinks, and drains',
            'items' => [
                'Kitchen and bathroom faucet repair or replacement',
                'Sink, stopper, pop-up drain, and undermount sink assistance',
                'Clogged sink and water-flow troubleshooting',
                'Visible minor leaks and hose-bib leak repair',
            ],
        ],
        [
            'icon' => 'bi-wrench-adjustable',
            'title' => 'Toilets and bathroom fixtures',
            'items' => [
                'Toilet fill valve, float, and tank-kit replacement',
                'Toilet wax-ring replacement and leak evaluation',
                'Bidet installation and bidet leak repair',
                'Bathroom fixture replacement and shutoff review',
            ],
        ],
        [
            'icon' => 'bi-gear',
            'title' => 'Kitchen and appliance connections',
            'items' => [
                'Garbage-disposal installation and replacement',
                'Dishwasher installation assistance and drain-loop correction',
                'Ice-maker water-line installation assistance',
                'Utility-sink and small fixture connections',
            ],
        ],
        [
            'icon' => 'bi-clipboard-check',
            'title' => 'Scope and coordination',
            'items' => [
                'Shutoff access and fixture-condition review',
                'Material and replacement-option planning',
                'Permit or code coordination when required',
                'Referral or scheduling path when the request exceeds minor fixture scope',
            ],
        ],
    ],
    'planning_title' => 'Useful information before scheduling',
    'planning_paragraphs' => [
        'Send a photo of the fixture, the visible leak or symptom, the shutoff location, and any model or replacement information. For active water release, use the appropriate shutoff and seek urgent professional assistance; the website does not promise 24/7 emergency response.',
        'Gas work and unrestricted major plumbing are not marketed. Water-heater and permit-sensitive work is handled only when properly licensed or coordinated for the exact scope.',
    ],
    'requirements_note' => 'Manufacturer, code, permit, and property requirements may apply. Plumbing scope is tied to the verified Responsible Master Plumber listed on this page.',
    'related_services' => [
        ['href' => 'water-softener-filter-service-georgetown-tx.php', 'label' => 'Water Softeners & Filters', 'description' => 'Water treatment, flow, and filter assistance.'],
        ['href' => 'handyman-services-sun-city-georgetown.php', 'label' => 'Handyman Services', 'description' => 'Related cabinet, wall, trim, and hardware repairs.'],
        ['href' => 'home-inspection-punch-list-repairs-georgetown-tx.php', 'label' => 'Inspection & Punch Lists', 'description' => 'Coordinate fixture items with other small repairs.'],
    ],
];

require __DIR__ . '/includes/service-landing-page.php';
