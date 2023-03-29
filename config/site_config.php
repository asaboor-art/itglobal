<?php 

return [

    'assets' => [
        'images' => 'images/',
        'css' => 'css/',
        'js' => 'js/',
        'js_scripts' => 'js/scripts/',
        'plugins' => 'plugins/',
        'fonts' => 'fonts/',
        'layouts' => 'layouts.',
        'home_pages' => 'homes.',
        'pages' => 'pages.',
        'logo'=>'images/logo.png',

    ],
    'constants' => [
        'experience' => '10',
        'warranty' => '2',
    ],
    'menus' => [
        'pages' => [
            [
                'name' => 'home',
                'link' => 'home',
                'is_main' => true,
                'class' => 'menu-item',
                'type' => 'page',
                'link-class' => 'menu-link active',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'about_us',
                'link' => 'about-us',
                'is_main' => false,
                'class' => 'menu-item',
                'type' => 'page',
                'link-class' => 'menu-link ',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'services',
                'link' => 'services',
                'is_main' => false,
                'class' => 'menu-item',
                'type' => 'page',
                'link-class' => 'menu-link ',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'blogs',
                'link' => 'blogs',
                'is_main' => false,
                'class' => 'menu-item',
                'type' => 'link',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'contact',
                'link' => 'contact-us',
                'is_main' => false,
                'class' => 'menu-item',
                'type' => 'page',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' => []
            ],
            
        ],
        'footer-menu1' => [
            [
                'name' => 'home',
                'link'  => 'home',
            ],
            [
                'name' => 'about_us',
                'link'  => 'about-us',
            ],
            [
                'name' => 'contact',
                'link'  => 'contact-us',
            ],
            [
                'name' => 'services',
                'link'  => 'services',
            ],
            [
                'name' => 'blogs',
                'link'  => 'blogs',
            ]
        ]

    ],
    'contacts' => [
        'phone' => "(403)376-3322",
        'email' => "info@calgarypaintingcrew.com",
        'copyright' => "© 2022 Calgary Painting Crew. All rights reserved.",
        'name' => "Calgary Painting",
        'address'   => "328 40 Ave NE Calgary,AB T2E 2M7",
        'developer' => 'K13.ca',
        'facebook' => 'javascript:void(0);',
        'tiktok' => 'javascript:void(0);',
        'whatsapp' => 'javascript:void(0);',
        'instragram' => 'https://www.instagram.com/calgarypaintingcrew/?igshid=ZmVmZTY5ZGE%3D',
        'map' => "https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28393.307336755148!2d-114.05491292789799!3d51.02284509581211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scalgary%20detailing%20CA!5e0!3m2!1sen!2s!4v1679095364003!5m2!1sen!2s"
    ]


];