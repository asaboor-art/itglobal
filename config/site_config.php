<?php 

return [

    'assets' => [
        'images' => 'images/',
        'css' => 'css/',
        'js' => 'js/',
        'plugins' => 'plugins/',
        'fonts' => 'fonts/',
        'layouts' => 'layouts.',
        'home_pages' => 'homes.',
        'pages' => 'pages.',

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


];