<?php

return [
    'myComponent' => [
        'class' => '\Component\MyComponent',
    ],
    'myPassCrypt' => [
        'class' => '\Component\PassCrypt'
    ],
    'myAuthHandler' => [
        'class' => '\Component\MyAuthHandler',
        'params' => [
            'view' => [
                'type' => 'object',
                'value' => 'view'
            ],
            'response' => [
                'type' => 'object',
                'value' => 'response'
            ],
        ]
    ]
];


