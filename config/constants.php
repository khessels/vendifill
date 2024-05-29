<?php
return [
    'permissions' => [
        'super user',
        'content-moderate',
        'content-flush',
        'users-manage',
        'tickets-fulfill',
        'financials-reports',
        'financials-non-sensitive',
        'financials-non-sensitive-update',
        'financials-sensitive',
        'financials-sensitive-update',
        'machines-manage',
        'machines-config',
        'machines-fill',
        'machines-service',
        'machines-experiment',
        ],

    'roles' => [
        [
            'name'=> 'developer',
            'permissions' => ['super user',
                'content-moderate',
                'content-flush',
                'users-manage',
                'tickets-fulfill',
                'financials-reports',
                'financials-non-sensitive',
                'financials-non-sensitive-update',
                'financials-sensitive',
                'financials-sensitive-update',
                'machines-manage',
                'machines-config',
                'machines-fill',
                'machines-service',
                'machines-experiment',
            ]
        ],
        [
            'name'=> 'strapi',
            'permissions' => ['content-flush']
        ],
        [
            'name'=> 'depot',
            'permissions' => ['tickets-fulfill']
        ],
        [
            'name'=> 'back-end',
            'permissions' => ['manage users']
        ],
        [
            'name'=> 'technician',
            'permissions' => ['technician', 'access-machines', ]
        ],
        [
            'name'=> 'driver',
            'permissions' => ['access-machines']
        ],
        [
            'name'=> 'service supplier',
            'permissions' => []
        ],
    ]

];
