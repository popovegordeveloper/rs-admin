<?php

return [
    'auth' => [

        'guards' => [
            'admin' => [
                'driver' => 'session',
                'provider' => 'admin',
            ]
        ],

        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => \Rs\RsAdmin\Models\Admin::class,
            ]
        ]
    ]
];
