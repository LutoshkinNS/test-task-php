<?php

use yii\httpclient\Client;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'hlynov-task',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'Тестовый интернет банк',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'credit' => 'app\modules\credit\CreditModule',
        'cards' => 'app\modules\cards\CardsModule',
    ],
    'components' => [
        'httpClient' => [
            'class' => Client::class,
            'baseUrl' => '',
            'transport' => 'yii\httpclient\CurlTransport',
        ],
        'request' => [
            'cookieValidationKey' => 'M0EeHauppVlRVxwZ8C0yHewYpHHL-GPN',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'index/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'index/index',
                'index' => 'index/index',
                'credit/<id:\d>' => 'credit/get/view',
                'credits' => 'credit/get/index',
                'cards' => 'cards/get/index',
                'cards/<id:\d>' => 'cards/get/view',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'panels' => [
            'httpclient' => [
                'class' => 'yii\\httpclient\\debug\\HttpClientPanel',
            ],
        ],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
