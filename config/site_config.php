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
        'image-not-found'=>'images/image-not-found.png',

    ],
    'constants' => [
        'experience' => '10',
        'warranty' => '2',
        'currency' => 'PKR', 
        'display-limit' => 4,
    ],
    'currencies' => [
        'PKR' => [
            'name' => 'PKR',
            'symbol' => '',
        ],
        'USD' => [
            'name' => 'USD',
            'symbol' => '$',
        ],
    ],
    'menus' => [
        'pages' => [
            [
                'name' => 'home',
                'link' => 'home',
                'is_main' => true,
                'class' => 'menu-item',
                'link-class' => 'menu-link active',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'about_us',
                'link' => 'about-us',
                'is_main' => false,
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'our_projects',
                'link' => 'projects',
                'is_main' => false,
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' =>[
                    [
                        'text' => 'Blue World City',
                        'link' => str_replace(' ','-','Blue-World-City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Capital Smart City',
                        'link' =>  str_replace(' ','-','Capital Smart City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Kingdom Valley',
                        'link' =>  str_replace(' ','-','Kingdom Valley'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Lahore Smart City',
                        'link' =>  str_replace(' ','-','Lahore Smart City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'New Metro City Gujar Khan',
                        'link' =>  str_replace(' ','-','New Metro City Gujar Khan'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Nova City',
                        'link' => str_replace(' ','-','Nova City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Park View City',
                        'link' =>  str_replace(' ','-','Park View City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Seven Wonders City',
                        'link' =>  str_replace(' ','-','Seven Wonders City'),
                        'route' => 'projects.get'
                    ],
                ]
            ],
            [
                'name' => 'services',
                'link' => 'services',
                'is_main' => false,
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' => [
                    [
                        'text' => 'Financial Advisory',
                        'link' => 'financial-advisory',
                        'route' => 'site-pages'
                    ],
                ]
            ],
            [
                'name' => 'buy_rent',
                'link' => 'properties',
                'is_main' => false,
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => false,
                'submenu' => []
            ],
            [
                'name' => 'book_now',
                'link' => 'contact-us',
                'is_main' => false,
                'class' => 'menu-item book-now-btn',
                'link-class' => 'btn btn-primary',
                'has_submenu' => true,
                'submenu' => []
            ],
            
            
        ],

    ],
    'contacts' => [
        'phone' => ["(403)376-3322","+1 456 695 6666","+1 456 695 6666"],
        'email' => ["info@realityonegroup.com","support@realityonegroup.com"],
        'copyright' => "© 2022 Calgary Painting Crew. All rights reserved.",
        'name' => "Calgary Painting",
        'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.386445110092!2d73.13804481549502!3d33.56931425047113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfed0335fc560d%3A0xe620a95d39a00216!2sGhar%20Kahani%20Pvt%20Ltd.!5e0!3m2!1sen!2s!4v1674252985805!5m2!1sen!2s',
        'address'   => "328 40 Ave NE Calgary,AB T2E 2M7",
        'developer' => 'K13.ca',
        'social' => [
            'instagram' => [
                'url' => 'http://www.instagram.com',
                'icon' => 'fa fa-instagram',
            ],
            'twitter' => [
                'url' => 'https://twitter.com/',
                'icon' => 'fa fa-twitter',
            ],
            'facebook' => [
                'url' => 'http://www.facebook.com',
                'icon' => 'fa fa-facebook',
            ],
            'whatsapp' => [
                'url' => 'http://www.whatsapp.com',
                'icon' => 'fa fa-whatsapp',
            ],
            'youtube' => [
                'url' => 'http://www.youtube.com',
                'icon' => 'fa fa-youtube',
            ],
         
        ]
       

    ],
    'footer-menu1' => [
        [
            'text' => 'home',
            'link' => 'home'
        ],
        [
            'text' => 'about_us',
            'link' => 'about-us'
        ],
        [
            'text' => 'our_team',
            'link' => 'javascript:void(0)'
        ],
        [
            'text' => 'videos',
            'link' => 'javascript:void(0)'
        ],
        [
            'text' => 'blog',
            'link' => 'javascript:void(0)'
        ],
        [
            'text' => 'contact',
            'link' => 'contact-us'
        ],
        [
            'text' => 'privacy_policy',
            'link' => 'javascript:void(0)'
        ],
    ],
    'footer-menu2' => [

        [
            'text' => 'Blue World City',
            'link' => str_replace(' ','-','Blue-World-City')
        ],
        [
            'text' => 'Capital Smart City',
            'link' =>  str_replace(' ','-','Capital Smart City')
        ],
        [
            'text' => 'Kingdom Valley',
            'link' =>  str_replace(' ','-','Kingdom Valley')
        ],
        [
            'text' => 'Lahore Smart City',
            'link' =>  str_replace(' ','-','Lahore Smart City')
        ],
        [
            'text' => 'New Metro City Gujar Khan',
            'link' =>  str_replace(' ','-','New Metro City Gujar Khan')
        ],
        [
            'text' => 'Nova City',
            'link' => str_replace(' ','-','Nova City')
        ],
        [
            'text' => 'Park View City',
            'link' =>  str_replace(' ','-','Park View City')
        ],
        [
            'text' => 'Seven Wonders City',
            'link' =>  str_replace(' ','-','Seven Wonders City')
        ],
        [
            'text' => 'Taj Residencia',
            'link' => 'Blue World City'
        ],
    ],


];