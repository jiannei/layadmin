<?php

/*
 * This file is part of the jiannei/layadmin.
 *
 * (c) jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    'title' => env('ADMIN_TITLE', 'LayAdmin'),
    'desc' => env('ADMIN_DESC', '江 城 最 具 影 响 力 的 后 台 系 统 之 一'),

    'guard' => env('ADMIN_GUARD', 'admin'),

    'routes' => [
        'web' => [
            'prefix' => env('ADMIN_WEB_PREFIX', 'admin'),
            'middleware' => ['web', 'admin'],
        ],
        'api' => [
            'prefix' => env('ADMIN_API_PREFIX', 'api'),

            'middleware' => ['web'],
        ],
    ],

    'auth' => [
        'guards' => [
            'admin' => [
                'driver' => 'session',
                'provider' => 'users',
            ],
        ],
    ],

    'https' => env('ADMIN_HTTPS', false),

    'config' => \Jiannei\LayAdmin\Support\Config::class,
];
