<?php
declare(strict_types=1);

$pageKey = 'grab-bar-installation-sun-city-georgetown.php';
$servicePage = [
    'h1' => 'Grab Bar Installation in Sun City Georgetown',
    'breadcrumb' => 'Grab Bar Installation',
    'eyebrow' => 'Sun City 78633 • Berry Creek 78628 • Home Safety',
    'intro_title' => 'Bathroom safety hardware installed for daily use',
    'lead' => "Mark's Services installs grab bars, shower grab bars, towel bars, and related bathroom safety hardware for Georgetown-area homeowners.",
    'intro_paragraphs' => [
        'A useful grab bar needs an appropriate location, secure attachment, suitable hardware, and a placement that supports the homeowner’s actual movement through the space.',
        'Photos of the shower or bathroom walls, the desired location, wall material, and the selected product help identify attachment, waterproofing, access, and manufacturer requirements before installation.',
    ],
    'credential' => [
        'title' => 'Verified home-repair experience',
        'lines' => [
            HANDYMAN_EXPERT,
            'Handyman & Home Repair Expert • ' . HANDYMAN_EXPERIENCE,
        ],
        'note' => 'Mark’s prior electrical and plumbing licenses are expired. This page concerns grab bars and home-safety hardware, not current electrical or plumbing licensure.',
    ],
    'scope_title' => 'Grab bar and home-safety installation scope',
    'scope_intro' => 'The goal is practical hardware placement and secure installation without unsupported medical or safety guarantees.',
    'scope_groups' => [
        [
            'icon' => 'bi-shield-check',
            'title' => 'Grab bars and bathroom safety hardware',
            'items' => [
                'Shower and tub-area grab bars',
                'Bathroom wall grab bars and support hardware',
                'Towel bars and accessories where appropriate',
                'Replacement of loose or poorly positioned hardware after evaluation',
            ],
        ],
        [
            'icon' => 'bi-rulers',
            'title' => 'Placement and attachment review',
            'items' => [
                'Wall material and backing or stud-location review',
                'Product fastener and manufacturer-instruction review',
                'Door, fixture, shower-door, and reach-clearance considerations',
                'Waterproofing and surface-condition considerations',
            ],
        ],
        [
            'icon' => 'bi-house-check',
            'title' => 'Related home-safety tasks',
            'items' => [
                'High-reach light and smoke-detector replacement',
                'Mirrors, blinds, curtain rods, and bathroom accessories',
                'Door hardware and smart-lock installation',
                'Accessibility-oriented maintenance punch lists',
            ],
        ],
        [
            'icon' => 'bi-clipboard-check',
            'title' => 'Scope boundaries',
            'items' => [
                'No medical, fall-prevention, or accessibility-compliance guarantee',
                'No full bathroom remodeling claim',
                'Wall repair quoted separately when required',
                'Licensed trades coordinated if the scope touches regulated plumbing or electrical work',
            ],
        ],
    ],
    'planning_title' => 'Choose hardware and placement for the actual space',
    'planning_paragraphs' => [
        'The homeowner should identify how the area is used and any guidance provided by a medical or accessibility professional. Mark’s Services can evaluate installation conditions but does not prescribe medical equipment or guarantee that hardware prevents falls.',
        'If the wall needs repair, reinforcement, waterproofing, or fixture relocation, those items are evaluated separately before installation proceeds.',
    ],
    'requirements_note' => 'Follow product instructions and confirm any property or community requirements. Medical or accessibility guidance should come from the appropriate qualified professional.',
    'related_services' => [
        ['href' => 'handyman-services-sun-city-georgetown.php', 'label' => 'Handyman Services', 'description' => 'Related doors, hardware, drywall, and mounted items.'],
        ['href' => 'light-fan-switch-outlet-services-georgetown-tx.php', 'label' => 'Lighting & Devices', 'description' => 'High-reach lighting and smoke-detector service.'],
        ['href' => 'home-inspection-punch-list-repairs-georgetown-tx.php', 'label' => 'Home Safety Punch Lists', 'description' => 'Combine safety hardware with other maintenance items.'],
    ],
];

require __DIR__ . '/includes/service-landing-page.php';
