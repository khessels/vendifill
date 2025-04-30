<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'permissions' => [
                'file' => [
                    'public' => 0775,
                    'private' => 0600,
                ],
                'dir' => [
                    'public' => 0775,
                    'private' => 0700,
                ],
            ],
            'throw' => false,
        ],
        'resources' => [
            'driver' => 'local',
            'root' => storage_path('app/resources'),
            'serve' => false,
            'throw' => false,
        ],
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'permissions' => [
                'file' => [
                    'public' => 0775,
                    'private' => 0600,
                ],
                'dir' => [
                    'public' => 0775,
                    'private' => 0700,
                ],
            ],
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],
        'spaces_images' => [
            'driver' => 's3',
            'key' => env('SPACES_IMAGES_ACCESS_KEY_ID', '===AAACESS KEY==='),
            'secret' => env('SPACES_IMAGES_SECRET_ACCESS_KEY', '===BBBSECRECT KEY==='),
            'region' => env('SPACES_IMAGES_DEFAULT_REGION', 'ams3'),
            'bucket' => env('SPACES_IMAGES_BUCKET', 'laravel-spaces'),
            'url' => env('SPACES_IMAGES_URL', 'https://image-storage-1.ams3.cdn.digitaloceanspaces.com'),
            'endpoint' => env('SPACES_IMAGES_ENDPOINT', 'https://ams3.digitaloceanspaces.com'),
            'use_path_style_endpoint' => env('SPACES_IMAGES_USE_PATH_STYLE_ENDPOINT', false),
        ],
        'spaces_documents' => [
            'driver' => 's3',
            'key' => env('SPACES_DOCUMENTS_ACCESS_KEY_ID', '===AAACESS KEY==='),
            'secret' => env('SPACES_DOCUMENTS_SECRET_ACCESS_KEY', '===BBBSECRECT KEY==='),
            'region' => env('SPACES_DOCUMENTS_DEFAULT_REGION', 'ams3'),
            'bucket' => env('SPACES_DOCUMENTS_BUCKET', 'laravel-spaces'),
            'url' => env('SPACES_DOCUMENTS_URL', 'https://laravel-spaces.ams3.cdn.digitaloceanspaces.com'),
            'endpoint' => env('SPACES_DOCUMENTS_ENDPOINT', 'https://laravel-spaces.ams3.digitaloceanspaces.com'),
            'use_path_style_endpoint' => env('SPACES_DOCUMENTS_USE_PATH_STYLE_ENDPOINT', false),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
