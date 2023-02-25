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
                'type' => 'page',
                'link-class' => 'menu-link active',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'buy_rent',
                'link' => 'properties.index',
                'is_main' => false,
                'type' => 'link',
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => false,
                'submenu' => []
            ],
            [
                'name' => 'about_us',
                'link' => 'about-us',
                'is_main' => false,
                'type' => 'page',
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => false,
                'submenu' => []
            ],
            [
                'name' => 'our_projects',
                'link' => 'projects.index',
                'is_main' => false,
                'type' => 'lin',
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' =>[
                    [
                        'text' => 'Prime Valley',
                        'link' => str_replace(' ','-','Prime Valley'),
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
                        'text' => 'New Metro City',
                        'link' =>  str_replace(' ','-','New Metro City'),
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
                        'text' => 'Eighteen',
                        'link' =>  str_replace(' ','-','Eighteen'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Sialkot Motorway City',
                        'link' =>  str_replace(' ','-','Sialkot Motorway City'),
                        'route' => 'projects.get'
                    ],
                ]
            ],
            [
                'name' => 'services',
                'link' => 'services',
                'is_main' => false,
                'type' => 'page',
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
                'name' => 'book_now',
                'link' => 'contact-us',
                'is_main' => false,
                'type' => 'page',
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
            'text' => 'Prime Valley',
            'link' => str_replace(' ','-','Prime Valley')
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
            'text' => 'New Metro City',
            'link' =>  str_replace(' ','-','New Metro City')
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
            'text' => 'Sialkot Motorway City',
            'link' =>  str_replace(' ','-','Sialkot Motorway City')
        ],
        [
            'text' => 'Eighteen',
            'link' => str_replace(' ','-','Eighteen')
        ],
    ],

    'galleries' => [
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/tennis-court.jpg',
                    'title' => 'Tennis Court',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/mahal.webp',
                    'title' => 'Taj Mahal',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/gate.webp',
                    'title' => 'Front Gate',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/sports-complex.webp',
                    'title' => 'Sports Complex',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/ariel.webp',
                    'title' => 'Aerial View',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/road.webp',
                    'title' => 'Road View',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/commerical-area.webp',
                    'title' => 'Commerical Area',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/mall.webp',
                    'title' => 'Shopping Mall',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/gate.webp',
                    'title' => 'Front Gate',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/water-park.webp',
                    'title' => 'Water Park',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/mosque.webp',
                    'title' => 'Mosque',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/commerical-area.webp',
                    'title' => 'Commerical Area',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/tennis-court.jpg',
                    'title' => 'Tennis Court',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/mahal.webp',
                    'title' => 'Taaj Mahal',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/gate.webp',
                    'title' => 'Front Gate',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/sports-complex.webp',
                    'title' => 'Sports Complex',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/ariel.webp',
                    'title' => 'Aerial View',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/road.webp',
                    'title' => 'Road View',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/commerical-area.webp',
                    'title' => 'Commerical Area',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/mall.webp',
                    'title' => 'Shopping Mall',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/gate.webp',
                    'title' => 'Front Gate',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/water-park.webp',
                    'title' => 'Water Park',
                ]
                
            ]
           
        ],
    ],

    'how-to-purchase' => [
        'heading' => '<span>How To Purchase</span> Your Property?',
        'sections' => [
            [
                'heading' => strtoupper('Always do your research'),
                'image' => 'pc1.png',
                'description' => "Make sure you are aware of the latest real estate news and trend along with the market conditions that may affect your capital to make an informed decision about your investment. ",
            ],
            [
                'heading' => strtoupper('Find the right agent'),
                'image' => 'pc2.png',
                'description' => "Look for an agent who can introduce you to the potential property with transparency. Reality One Group offers industry experts who you can trust with your investments and get desired results.",
            ],
            [
                'heading' => strtoupper('Land assessment and negotiation'),
                'image' => 'pc3.png',
                'description' => "Ensure a real-time visit to the site with a land surveyor to get the best location for construction. Reality One Group offers the best sales agents to negotiate your favorite price. ",
            ],
            [
                'heading' => strtoupper('Token money and pay bank order'),
                'image' => 'pc4.png',
                'description' => "Always start the transaction with the partial token money and keep the bank in the loop to ensure a smooth and evidence-based process.",
            ],
        ]
    ],

    'reviews' => [
        'heading' => 'What Our Clients <span>Say About Us</span>',
        'sections' => [
            [
                'name' => 'Zafar Hussain',
                'image' => 'slider-img.png',
                'review' => "I recently approached Reality One Group and had an amazing experience. Their agents are knowledgeable and professional, and they helped me find the perfect home for my family. I highly recommend them.",
            ],
            [
                'name' => 'Muzzamil Khan',
                'image' => 'slider-img.png',
                'review' => "I was extremely impressed with Reality One Group and the service they provided. They were always available to answer my questions and made the process of buying a home as stress-free as possible. I would definitely use them again in the future.",
            ],
            [
                'name' => 'Zakir Khan',
                'image' => 'slider-img.png',
                'review' => "I had a great experience with Reality One Group. The agent I worked with was very responsive and always had my best interests in mind. I appreciated their honesty and integrity throughout the process.",
            ],
            [
                'name' => 'Muzzamil Khan',
                'image' => 'slider-img.png',
                'review' => "I was very happy with the service I received from Reality One Group. They were very patient with me as I navigated the complex process of buying a home for the first time. I would definitely recommend them to others.",
            ],
            [
                'name' => 'Muzzamil Khan',
                'image' => 'slider-img.png',
                'review' => "I was extremely pleased with the immediate and transparent response from sales agents. Their agents were knowledgeable, professional, and always went above and beyond to help me find the perfect home. I will be sure to use them again in the future for any real estate needs.",
            ],
        ]
    ]



];