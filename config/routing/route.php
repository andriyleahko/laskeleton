<?php

    return [
        'myfirst' => [
            'url' => '/my/first',
            'controller' => '\Controller\My\First',
            'method' => 'index',
            'params' => 'a',
            'role' => [
                'denied' => ['Anonim'],
                'allow' => ['User']
            ]
        ],
        'mysecond' => [
            'url' => '/my/first',
            'controller' => '\Controller\My\First',
            'method' => 'index2',
            'params' => 'a/b',

        ],
        'mythird' => [
            'url' => '/my/first',
            'controller' => '\Controller\My\First',
            'method' => 'index3',
        ],
        'root' => [
            'url' => '/',
            'controller' => '\Controller\Root',
            'method' => 'index',
        ]
    ];

