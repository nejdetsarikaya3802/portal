<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'si_UN-6_7eb63K1IEmceqT7SHtpAhO7d',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs'   => ['*'],
        'generators' => [ 
            'kouoslModule' => [
            'class' => 'kouosl\gii\module\Generator',
            ]
        ]
    ];
}

return $config;
