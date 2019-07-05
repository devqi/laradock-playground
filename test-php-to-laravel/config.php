<?php

return [
    'database' => [
        'name' => 'tododb',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=mysql',
        'port' => 3306,
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
