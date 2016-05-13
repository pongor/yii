<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'backend' => [
            'class' => 'app\backend\module',
            'layout'=> 'main',
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout'=> 'left-menu',
            'controllerMap' => [
                'assignment'=>[
                        'class' => 'mdm\admin\controllers\AssignmentController',
                        'userClassName' => 'mdm\admin\models\User',
                        'idField'   => 'id'
                ]
            ],
            'menus' => [
                'assignment' => [
                    'label' => '权限分配'
                ],
                'route' => 'Routes'
            ]
        ]
    ],
    'components' => [

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'y2l3WpmMqvldvdaGB9nguTMe0QMbu3RU',
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
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'assignmentTable' => 'auth_assignment',
            'itemChildTable' => 'auth_item_child',
        ],
        'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            'allowActions' => [
                'site/*',//允许访问的节点，可自行添加
                'admin/*',//允许所有人访问admin节点及其子节点
            ]
        ],

    ],

    //'language' => 'zh-CN',
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
