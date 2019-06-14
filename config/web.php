<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'zh-CN',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '22',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
//        'urlManager' => [
//            'enablePrettyUrl' => true,//路由的路径化
//            'showScriptName' => false,//隐藏入口脚本
//            'suffix' => '.htm',//假后缀(fake suffix) .htm
//            'rules' => [
//                // 为路由指定了一个别名，以 post 的复数形式来表示 post/index 路由
//                'detail' => 'test/detail',
//                'posts' => 'post/index',
//                //'sites' => 'site/index',
//                //'login' => 'site/login',
//                //'signup' => 'site/signup',
//
//                // id 是命名参数，post/100 形式的URL，其实是 post/view&id=100
//                //'post/<id:\d+>' => 'post/view',
//
//                // controller action 和 id 以命名参数形式出现
//                //'<controller:(post|comment)>/<id:\d+>/<action:(create|update|delete)>' => '<controller>/<action>',
//
//                // 包含了 HTTP 方法限定，仅限于DELETE方法
//                //'DELETE <controller:\w+>/<id:\d+>' => '<controller>/delete',
//
//                // 需要将 Web Server 配置成可以接收 *.digpage.com 域名的请求
//                //'http://<user:\w+>.digpage.com/<lang:\w+>/profile' => 'user/profile',
//            ],
//        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
