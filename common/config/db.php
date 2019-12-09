<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=localhost;dbname=db_hope',
            'username' => 'postgres',
            'password' => '111233',
            'charset' => 'utf8',
        ],
    ],
];
