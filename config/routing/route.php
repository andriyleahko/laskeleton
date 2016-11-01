<?php

    return [
        /**
         * @example route
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
         * 
         */
        'root' => [
            'url' => '/',
            'controller' => '\Controller\Root',
            'method' => 'index',
        ],
        'profile' => [
            'url' => '/profile',
            'controller' => '\Modules\Profile\Profile',
            'method' => 'index',
        ],
        'login' => [
            'url' => '/login',
            'controller' => '\Modules\Profile\Auth',
            'method' => 'login',
        ],
        'logout' => [
            'url' => '/logout',
            'controller' => '\Modules\Profile\Auth',
            'method' => 'logout',
        ],
        'register' => [
            'url' => '/register',
            'controller' => '\Modules\Profile\Register',
            'method' => 'register',
        ],
    ];

