<?php

return [
    'global' => [
        'load_balancer' => 'round-robin',
        'timeout' => 5,
        'middlewares' => [

        ]
    ],
    'routes' => [
        [
            'service_name' => 'user',
            'protocol' => 'http',
            'load_balancer' => 'round-robin',
            'timeout' => 5,
            'middlewares' => [
                /*\App\Middleware\TestMiddleware::class => [
                    'in_action' => ['*', 'test/post'],
                    //'out_action' => ['test/post'],
                ],*/
            ],
            'nodes' => [
                ['host' => '127.0.0.1', 'port' => 9501],
                //['host' => '127.0.0.1', 'port' => 9502],
            ],
        ],
    ]
];
