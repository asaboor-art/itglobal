<?php
return [
    'admin' => [
        'sidebar' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'submenu' => [],
            ],
            [
                'name' => 'categories',
                'route' => 'categories.index',
                'icon' => 'nav-icon fas fa-clipboard',
                'has_submenu' => false,
                'submenu_icon' => '',
                'submenu' => [],
            ],
           
            // [
            //     'name' => 'general-setting',
            //     'route' => 'home',
            //     'icon' => 'nav-icon fas fa-bars',
            //     'has_submenu' => true,
            //     'submenu_icon' => 'right fas fa-angle-left',
            //     'submenu' => [
            //         [
            //             'name' => 'site-page',
            //             'route' => 'general-setting.site-page.get',
            //             'icon' => 'nav-icon fa fa-clipboard',
            //             'has_submenu' => false,
            //             'submenu_icon' => '',
            //             'submenu' => [],
            //         ],
                    

            //     ],
            // ]
        ]
    ],
    'guest' => [
        [
            'name' => 'home',
            'route' => 'home',
        ],
        [
            'name' => 'about',
            'route' => 'home',
        ],
        [
            'name' => 'testimonials',
            'route' => 'home',
        ],
        [
            'name' => 'ideas',
            'route' => 'ideas.get',
        ],
        [
            'name' => 'contact_us',
            'route' => 'home',
        ]

    ],
    'auth' => [
        'innovator' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
            ],
            [
                'name' => 'messages',
                'route' => 'messages.index',
            ],
            [
                'name' => 'deals',
                'route' => 'deals.index',
            ],
            [
                'name' => 'ideas',
                'route' => 'ideas.index',
            ],
            [
                'name' => 'revenue',
                'route' => 'revenue.index',
            ]
        ],
        'company' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
            ],
            [
                'name' => 'messages',
                'route' => 'messages.index',
            ],
            [
                'name' => 'deals',
                // 'route' => 'deals.index',
                'route' => 'dashboard',
            ],
            [
                'name' => 'ideas',
                'route' => 'ideas.index',
            ],

        ],
        'admin' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
            ],
            [
                'name' => 'about',
                'route' => 'about',
            ],
            [
                'name' => 'testimonials',
                'route' => 'testimonials',
            ],
            [
                'name' => 'ideas',
                'route' => 'ideas',
            ],
            [
                'name' => 'contact_us',
                'route' => 'contact_us',
            ]


        ],




    ]


];
