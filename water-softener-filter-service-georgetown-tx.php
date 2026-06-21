<?php
declare(strict_types=1);

$pageKey = 'water-softener-filter-service-georgetown-tx.php';
$servicePage = [
    'h1' => 'Water Softener and Filter Service in Georgetown, TX',
    'breadcrumb' => 'Water Softener & Filter Service',
    'eyebrow' => 'Sun City 78633 • Berry Creek 78628 • Georgetown',
    'intro_title' => 'Water treatment, filtration, and flow assistance',
    'lead' => "Mark's Services helps homeowners plan and service water softeners, filters, reverse-osmosis systems, and related water-flow concerns through the verified plumbing scope.",
    'intro_paragraphs' => [
        'The right next step depends on the existing plumbing, equipment location, drain and power needs, bypass configuration, water conditions, and the manufacturer’s installation requirements.',
        'Photos of the equipment, model information, the installation area, nearby shutoffs, drains, and outlets help clarify whether the request is maintenance, troubleshooting, replacement, or a new installation.',
    ],
    'credential' => [
        'title' => 'Verified current plumbing credential',
        'lines' => [
            PLUMBING_LICENSE_HOLDER,
            'Responsible Master Plumber ' . PLUMBING_LICENSE,
        ],
        'note' => 'Water-system work is evaluated for the exact plumbing, manufacturer, permit, drain, and electrical requirements involved.',
    ],
    'scope_title' => 'Water-system service scope',
    'scope_intro' => 'Services focus on residential water treatment, filtration, and practical troubleshooting for Georgetown-area homes.',
    'scope_groups' => [
        [
            'icon' => 'bi-water',
            'title' => 'Water softeners',
            'items' => [
                'Water-softener installation and replacement planning',
                'Programming, regeneration, and settings assistance',
                'Bypass, flow, drain, and equipment-location review',
                'Troubleshooting salt, cycling, hardness, or performance concerns',
            ],
        ],
        [
            'icon' => 'bi-funnel',
            'title' => 'Whole-house filtration',
            'items' => [
                'Whole-house filter installation and replacement planning',
                'Filter-housing, cartridge, bypass, and shutoff review',
                'Space, access, flow-direction, and service-clearance checks',
                'Coordination with existing softeners or water equipment',
            ],
        ],
        [
            'icon' => 'bi-cup-straw',
            'title' => 'Reverse-osmosis and point-of-use systems',
            'items' => [
                'Under-sink reverse-osmosis installation assistance',
                'Storage tank, faucet, drain, and tubing review',
                'Point-of-use filter and water-heater coordination',
                'Filter-change and manufacturer-maintenance planning',
            ],
        ],
        [
            'icon' => 'bi-clipboard-data',
            'title' => 'Water-flow and test assistance',
            'items' => [
                'Residential water-flow troubleshooting',
                'Water-test assistance without unsupported treatment promises',
                'Equipment and symptom documentation',
                'Referral path when municipal, well, utility, or laboratory help is needed',
            ],
        ],
    ],
    'planning_title' => 'Match equipment decisions to the actual home',
    'planning_paragraphs' => [
        'A useful proposal starts with the current equipment, available space, plumbing route, drain location, nearby power, and the homeowner’s actual water concerns. The site does not promise a specific water result without appropriate testing and equipment selection.',
        'Water-heater work, new plumbing connections, and electrical needs are evaluated separately and tied to the verified current credential for each regulated scope.',
    ],
    'requirements_note' => 'Confirm manufacturer, plumbing, electrical, permit, drain, and utility requirements for the selected equipment and installation location.',
    'related_services' => [
        ['href' => 'plumbing-fixture-repair-georgetown-tx.php', 'label' => 'Plumbing Fixture Repair', 'description' => 'Faucets, sinks, toilets, drains, and minor leaks.'],
        ['href' => 'light-fan-switch-outlet-services-georgetown-tx.php', 'label' => 'Electrical Devices', 'description' => 'Coordinate outlets or power needs through the verified contractor.'],
        ['href' => 'handyman-services-sun-city-georgetown.php', 'label' => 'Handyman Services', 'description' => 'Related cabinet, wall, shelf, and finish work.'],
    ],
];

require __DIR__ . '/includes/service-landing-page.php';
