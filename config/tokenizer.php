<?php

return [
    'url' => env('TOKENIZER_URL', 'http://127.0.0.1:3002'),
    'credentials' => [
        'email' => env('TOKENIZER_EMAIL', "api@vendifill.com"),
        'password' => env('TOKENIZER_PASSWORD', "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9"),
    ],
];
