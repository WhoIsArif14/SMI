<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Social Media Configuration
    |--------------------------------------------------------------------------
    |
    | Konfigurasi link media sosial perusahaan
    |
    */

    'facebook' => env('SOCIAL_FACEBOOK', 'http://facebook.com/selarasmitraintegra'),
    'instagram' => env('SOCIAL_INSTAGRAM', 'https://instagram.com/selaras_mitraintegra'), 
    'linkedin' => env('SOCIAL_LINKEDIN', 'https://www.linkedin.com/company/pt-selarasmitraintegra/'),
    'twitter' => env('SOCIAL_TWITTER', 'https://twitter.com/selarasmitra'),
    'youtube' => env('SOCIAL_YOUTUBE', 'https://youtube.com/@selarasgroup6157?si=hlmbS5W-o4mtF5Ud'),
    'whatsapp' => env('SOCIAL_WHATSAPP', 'https://wa.me/6281234567890'),
    
    'contact' => [
        'email' => env('CONTACT_EMAIL', 'info@selarasmitra.com'),
        'phone' => env('CONTACT_PHONE', '+62 812-3456-7890'),
        'address' => env('CONTACT_ADDRESS', 'Jakarta, Indonesia'),
    ],
];
