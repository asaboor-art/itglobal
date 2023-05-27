<?php
return [
    'placeholder' => 'Enter :attribute',
    'register_successfully' => "Register Successfully",
    'edit' => 'Edit :attribute',
    'success_msg' => ':action Successfully',
    'contact_placeholder_msg' => 'How can we help you? Feel free to get in touch!',
    'error_msg' => 'Error while :action',
    'mail_error' => 'Enable to send email, sorry for the inconvience',
    'looks_to_do_project' => 'Looking to do a project outside of Calgary? We are able to do projects',
    'anywhere_in_canada' => 'anywhere in the USA or Canada. ',
    'contactus_for_information' => 'Contact us here for more information.',
    
    'errors' => [
        '500' => [
            'code'  => '500',
            'heading' => 'Internal Server Error',
            'description' => 'Please contact to administrator for further detail !',
        ],
        '401' => [
            'code' => '401',
            'heading' => "Unauthorized",
            'description' => 'You are not authorized to access this page!',
        ],
        '404' => [
            'code' => '404',
            'heading' => "Look like you're lost",
            'description' => 'The page you are looking for not avaible!',
        ],
        '403' => [
            'code' => '403',
            'heading' => "Permission denied",
            'description' => 'You do not have the rights to access this page!',
        ],
        '419' => [
            'code' => '419',
            'heading' => "Token Mismatch",
            'description' => 'Your CSRF token has been expired,please refresh the page!',
        ],
        '429' => [
            'code' => '429',
            'heading' => "Too many requests",
            'description' => 'Too many requests, server cannot handle!',
        ],
        '503' => [
            'code' => '503',
            'heading' => "Tmed Out",
            'description' => 'Time Out, Your Server has been timed out!',
        ],

    ]
];
