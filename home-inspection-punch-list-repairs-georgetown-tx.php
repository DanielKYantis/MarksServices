<?php
declare(strict_types=1);

$pageKey = 'home-inspection-punch-list-repairs-georgetown-tx.php';
$servicePage = [
    'h1' => 'Home Inspection and Punch-List Repairs in Georgetown, TX',
    'breadcrumb' => 'Inspection & Punch-List Repairs',
    'eyebrow' => 'Sun City • Berry Creek • Georgetown • Williamson County',
    'intro_title' => 'Turn a repair list into an organized scope',
    'lead' => "Mark's Services helps homeowners sort home-inspection items, maintenance lists, and sale punch lists into practical repairs, trade-specific work, and clear next steps.",
    'intro_paragraphs' => [
        'A report or handwritten list may combine doors, walls, fixtures, outlets, plumbing items, exterior sealing, trim, hardware, and tasks that require a currently licensed trade. Reviewing the list before scheduling avoids treating every line item as the same kind of work.',
        'Send the relevant report pages, photos, priorities, property location, and timing. Private customer information and unrelated report details should be removed before sharing.',
    ],
    'credential' => [
        'title' => 'Verified repair and trade context',
        'lines' => [
            HANDYMAN_EXPERT . ' • ' . HANDYMAN_EXPERIENCE,
            ELECTRICAL_LICENSE_HOLDER . ' • ' . ELECTRICAL_LICENSE,
            PLUMBING_LICENSE_HOLDER . ' • ' . PLUMBING_LICENSE,
        ],
        'note' => 'Mark’s prior electrical and plumbing licenses are expired. Current regulated items are tied to the verified current license holder for that trade.',
    ],
    'scope_title' => 'Common punch-list categories',
    'scope_intro' => 'Each list is filtered through the approved service boundaries before work is proposed.',
    'scope_groups' => [
        [
            'icon' => 'bi-door-open',
            'title' => 'Doors, locks, cabinets, and trim',
            'items' => [
                'Door adjustment, locks, stops, and hardware',
                'Cabinet doors, shelves, and cabinet hardware',
                'Baseboards, shoe molding, trim, and small carpentry',
                'Storm doors and sliding-door repair',
            ],
        ],
        [
            'icon' => 'bi-bricks',
            'title' => 'Walls and finish repairs',
            'items' => [
                'Drywall, sheetrock, and texture repair',
                'Water-damage wall repair after the source is addressed',
                'Repair-related paint touch-ups',
                'Mounted-item, mirror, blind, and curtain-rod installation',
            ],
        ],
        [
            'icon' => 'bi-lightning-charge',
            'title' => 'Electrical and plumbing items',
            'items' => [
                'Lights, fans, switches, outlets, GFCIs, and smoke detectors',
                'Faucets, sinks, toilets, drains, disposals, and minor leaks',
                'Current credential applied to the appropriate regulated scope',
                'Separate planning for panels, circuits, water heaters, permits, or larger work',
            ],
        ],
        [
            'icon' => 'bi-house-gear',
            'title' => 'Minor exterior and maintenance items',
            'items' => [
                'Gutters, downspouts, fascia, and minor siding repair',
                'Exterior caulking, sealing, mailbox repair, and entry prevention',
                'Dryer-vent assistance and house washing',
                'Visible exterior work subject to current property requirements',
            ],
        ],
    ],
    'planning_title' => 'Not every inspection item belongs in one proposal',
    'planning_paragraphs' => [
        'Items involving roofing, HVAC equipment, gas, structural engineering, large construction, full remodeling, or other excluded scopes should be routed to the appropriate qualified provider rather than marketed as Mark’s Services work.',
        'The remaining approved items can be grouped by access, materials, trade, and urgency. That creates a clearer estimate and helps the homeowner understand what may be handled together.',
    ],
    'requirements_note' => 'Inspection reports do not replace trade diagnosis, permits, HOA review, manufacturer instructions, or specialist evaluation. Client-location appointments only.',
    'related_services' => [
        ['href' => 'handyman-services-sun-city-georgetown.php', 'label' => 'Handyman Services', 'description' => 'Doors, drywall, trim, cabinets, and small repairs.'],
        ['href' => 'plumbing-fixture-repair-georgetown-tx.php', 'label' => 'Plumbing Fixture Repair', 'description' => 'Licensed scope for fixture and minor-leak items.'],
        ['href' => 'light-fan-switch-outlet-services-georgetown-tx.php', 'label' => 'Electrical Devices', 'description' => 'Verified contractor scope for fixtures and devices.'],
    ],
];

require __DIR__ . '/includes/service-landing-page.php';
