<?php

namespace App\Support;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class FormSecurity
{
    public static function issue(): string
    {
        return Crypt::encryptString(json_encode([
            'issued' => now()->timestamp,
            'session' => hash('sha256', session()->token()),
            'nonce' => (string) Str::uuid(),
        ]));
    }
}
