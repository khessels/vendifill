<?php

declare(strict_types=1);

/*
 * This file is part of the Laravel-Strapi helper.
 *
 * (ɔ) Dave Blakey https://github.com/dbfx
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.md.
 */

return [
    // when strapi logs an error, it will wait x seconds to start logging the next error. This will i.e. limit logging
    'error_logging_timeout' => env('STRAPI_ERROR_LOGGING_TIMEOUT', 20),
    'enabled' => env('STRAPI_ENABLED', false),

    // The url to your Strapi installation, e.g. https://strapi.yoursite.com/
    'url' => env('STRAPI_BASE_URL'),

    // How long to cache results for in seconds
    'cacheTime' => (int) env('STRAPI_CACHE_STORAGE_TIME', 3600),

    // Token for authentication
    'token' => env('STRAPI_API_TOKEN', null),
];
