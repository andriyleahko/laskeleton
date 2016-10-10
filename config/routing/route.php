<?php

    return [
        'myfirst' => [
            'url' => '/my/first',
            'controller' => '\Controller\My\First',
            'method' => 'index',
            'params' => 'a/b/c',
            'role' => [
                'denied' => ['User'],
                'allow' => ['Anonim']
            ]
        ],
        'root' => [
            'url' => '/',
            'controller' => '\Controller\Root',
            'method' => 'index',
        ]
    ];

