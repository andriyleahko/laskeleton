<?php

    return [
        'myfirst' => [
            'url' => '/my/first',
            'controller' => '\Controller\My\First',
            'method' => 'index',
            'params' => 'a',
            'role' => [
                'denied' => ['User'],
                'allow' => ['Anonim']
            ]
        ],
        'mysecond' => [
            'url' => '/my/first',
            'controller' => '\Controller\My\First',
            'method' => 'index2',
            'params' => 'a/b',
            'role' => [
                'denied' => ['User'],
                'allow' => ['Anonim']
            ]
        ],
        'mythird' => [
            'url' => '/my/first',
            'controller' => '\Controller\My\First',
            'method' => 'index3',
            #'params' => '',
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

