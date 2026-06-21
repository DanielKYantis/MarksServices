<?php
declare(strict_types=1);

$pageKey = 'handyman-services-sun-city-georgetown.php';
$servicePage = [
    'h1' => 'Handyman Services in Sun City Georgetown, TX',
    'breadcrumb' => 'Handyman Services',
    'eyebrow' => 'Sun City 78633 • Berry Creek 78628 • Georgetown',
    'intro_title' => 'Focused repairs, maintenance, and small installations',
    'lead' => "Mark's Services helps homeowners handle the practical repair list without turning every project into a full remodel or large construction job.",
    'intro_paragraphs' => [
        'A handyman visit can cover doors, locks, drywall, trim, cabinets, shelves, hardware, mounted items, and other smaller tasks that affect how the home works day to day.',
        'Photos and a written list help separate work that may fit into one visit from items that need materials, a separate estimate, or a currently licensed electrical or plumbing professional.',
    ],
    'credential' => [
        'title' => 'Verified home-repair experience',
        'lines' => [
            HANDYMAN_EXPERT,
            'Handyman & Home Repair Expert • ' . HANDYMAN_EXPERIENCE,
        ],
        'note' => 'Mark has 20 years of prior electrical and plumbing licensure, but those licenses are expired. Current regulated work uses the verified current license holders.',
    ],
    'scope_title' => 'Handyman and home-repair scope',
    'scope_intro' => 'Services stay within practical repair, maintenance, fixture, and small-installation boundaries.',
    'scope_groups' => [
        [
            'icon' => 'bi-door-open',
            'title' => 'Doors, locks, cabinets, and hardware',
            'items' => [
                'Storm-door installation and sliding-door repair',
                'Door locks, smart locks, stops, blinds, and hardware',
                'Cabinet doors, cabinet hardware, shelves, and closet repairs',
                'Garage-door opener installation and remote troubleshooting',
            ],
        ],
        [
            'icon' => 'bi-hammer',
            'title' => 'Trim, walls, and smaller carpentry repairs',
            'items' => [
                'Baseboards, shoe molding, trim, and interior millwork repair',
                'Drywall, sheetrock, texture, and water-damage wall repair',
                'Repair-related paint touch-ups and wallpaper preparation',
                'Vanities, mirrors, blinds, curtain rods, and mounted items',
            ],
        ],
        [
            'icon' => 'bi-shield-check',
            'title' => 'Home safety and convenience',
            'items' => [
                'Grab bars, shower grab bars, towel bars, and safety hardware',
                'High-reach light and smoke-detector replacement',
                'TV mounts, flag brackets, and practical accessibility items',
                'Home maintenance and aging-in-place punch lists',
            ],
        ],
        [
            'icon' => 'bi-house-gear',
            'title' => 'Minor exterior maintenance',
            'items' => [
                'Gutters, downspouts, fascia, and minor siding repair',
                'Exterior caulking, sealing, mailbox repair, and house washing',
                'Bird or squirrel entry-prevention repairs',
                'Dryer-vent assistance and minor gate hardware when approved',
            ],
        ],
    ],
    'planning_title' => 'A clear list makes the visit more useful',
    'planning_paragraphs' => [
        'List each item, note the room or exterior location, and include photos when possible. Mark’s Services will identify likely materials, access concerns, and tasks that require a different trade path.',
        'The site does not market full remodeling, roofing, HVAC, deck building, fence contracting, or full painting. Repair-related paint touch-ups and small exterior maintenance remain within the approved scope.',
    ],
    'requirements_note' => 'Confirm current HOA, permit, utility, and manufacturer requirements for exterior-visible or regulated work. Client-location appointments only.',
    'related_services' => [
        ['href' => 'plumbing-fixture-repair-georgetown-tx.php', 'label' => 'Plumbing Fixture Repair', 'description' => 'Faucets, sinks, toilets, drains, and minor leaks.'],
        ['href' => 'light-fan-switch-outlet-services-georgetown-tx.php', 'label' => 'Light, Fan & Outlet Services', 'description' => 'Electrical fixtures and devices through the verified contractor.'],
        ['href' => 'home-inspection-punch-list-repairs-georgetown-tx.php', 'label' => 'Inspection & Punch Lists', 'description' => 'Organize several repairs into one clear scope.'],
    ],
];

require __DIR__ . '/includes/service-landing-page.php';
