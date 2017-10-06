<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=cmgdemocommunity',
            'username' => 'cmgdemocommunity',
            'password' => 'cmgdemocommunity',
            'charset' => 'utf8'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail'
        ]
    ]
];

?>