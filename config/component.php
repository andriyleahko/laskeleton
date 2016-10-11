<?php

return [
    'myComponent' => [
        'class' => '\Component\MyComponent',
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
    ],
    'myPassCrypt' => [
        'class' => '\Component\PassCrypt'
    ],
    'myAuthHandler' => [
        'class' => '\Component\MyAuthHandler'
    ]
];


