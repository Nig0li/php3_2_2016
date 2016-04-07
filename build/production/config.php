<?php

return [
    'domain' => 'test.com',
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => '{{db.user}}',
            'password' => '{{db.password}}',
            'dbname' => 'fw',
        ]
    ]
];