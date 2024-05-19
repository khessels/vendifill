<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Default expiration
    |--------------------------------------------------------------------------
    |
    | Content expires after x seconds
    | Set to 0 to not expire at all.
    |
    */
    'expiration' => [
        'default' => env('REDIS_EXPIRATION', 3600),
    ],

    /*
    |--------------------------------------------------------------------------
    | logging timeout
    |--------------------------------------------------------------------------
    |
    | we log only one time every x seconds. this is to minimize logging
    | Set to 0 to not expire at all.
    |
    */

    'logging' => [
        'error' => [
            'timeout' => env('REDIS_LOGGING_TIMEOUT', 10),
        ],
    ],
];
