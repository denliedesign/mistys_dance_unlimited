<?php

return [
    'office_hours' => [
        ['day' => 'Monday', 'opens' => '12:00', 'closes' => '21:00', 'label' => '12–9 PM'],
        ['day' => 'Tuesday', 'opens' => '09:00', 'closes' => '21:00', 'label' => '9 AM–9 PM'],
        ['day' => 'Wednesday', 'opens' => '09:00', 'closes' => '21:00', 'label' => '9 AM–9 PM'],
        ['day' => 'Thursday', 'opens' => '12:00', 'closes' => '21:00', 'label' => '12–9 PM'],
        ['day' => 'Friday', 'opens' => '15:00', 'closes' => '18:00', 'label' => '3–6 PM'],
        ['day' => 'Saturday', 'opens' => '09:00', 'closes' => '13:00', 'label' => '9 AM–1 PM'],
        ['day' => 'Sunday', 'opens' => '00:00', 'closes' => '00:00', 'label' => 'Closed'],
    ],
    // Public, canonical marketing pages. Excludes archives, forms, and admin routes.
    // Add new public guides here, then run: php artisan seo:sitemap
    'sitemap_paths' => [
        '/', '/aboutus', '/contact', '/studio', '/fall', '/summer', '/trialclass',
        '/parties', '/guys', '/adult-dance-classes', '/ballet-la-crosse', '/tumble-classes-la-crosse',
        '/hip-hop-classes', '/tap-jazz-classes', '/preschool-dance', '/dance-team',
        '/dance-la-crosse', '/dance-onalaska', '/dance-holmen',
        '/dance-west-salem', '/dance-la-crescent', '/pl', '/prepro',
        '/community-programming', '/employment', '/privacy-policy',
    ],
];
