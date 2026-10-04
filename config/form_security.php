<?php

return [
    // Enable only after installing real keys and verifying the allowed hostnames.
    'turnstile_enabled' => env('TURNSTILE_ENABLED', false),
    'site_key' => env('TURNSTILE_SITE_KEY'),
    'secret_key' => env('TURNSTILE_SECRET_KEY'),
    'hostnames' => array_filter(array_map('trim', explode(',', env('TURNSTILE_HOSTNAMES', 'mistysdance.com,www.mistysdance.com')))),
    'minimum_seconds' => 2,
    'maximum_seconds' => 7200,
];
