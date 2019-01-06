<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [

				'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => '214004880794-77iu03phhj23090n4ebvogoi40h6ghg8.apps.googleusercontent.com',
                    'clientSecret' => 'wPGHgjyeSB9tdiQLhnw8tf4H',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '2371911502880348',
                    'clientSecret' => '49c0296c122d99d26b6d1c98f0127910',
                ],
                // etc.
            ],
			
        ]
		
    ],
];
