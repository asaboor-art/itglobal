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
            ],
            [
                'name' => 'about_us',
                'link' => 'about-us',
                'is_main' => false,
            ],
            [
                'name' => 'services',
                'link' => 'services',
                'is_main' => false,
            ],
            [
                'name' => 'contact',
                'link' => 'contact-us',
                'is_main' => false,
            ],
            
        ],

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
        'instragram' => 'https://www.instagram.com/calgarypaintingcrew/?igshid=ZmVmZTY5ZGE%3D',

    ]


];