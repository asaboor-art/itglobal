<?php

return [
    'contact-form' => [
        'first_name' => 'required',
        'phone' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'services' => 'required',
        'message' => 'required'
    ],
    'page' =>  [
        'store' => [
            'name' => 'required',
            'slug' => 'required',
            'view' =>  'required',
            'description' => 'required',
            'layout' => 'required',
            'display_to_menu' => 'required|min:0|max:1',
            'is_home_page' => 'required|min:0|max:1',
        ]
    ],
    'newsletter' => [
        'email' => 'required|email|unique:newsletters'
    ],
    'layout' => [
        'name' => 'required',
        'view' =>  'required',
        'header_id' => 'required|exists:headers,id',
        'footer_id' => 'required|exists:footers,id',
    ],
    'header' => [
        'name' => 'required',
        'view' =>  'required',
    ],
    'footer' => [
        'name' => 'required',
        'view' =>  'required',
    ]
];