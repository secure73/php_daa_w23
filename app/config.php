<?php
// #Database##
$database_connections = [
    'default' => [
        'type' => 'mysql',
        'database_name' => 'teahaus',
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'port' => '',
    ]
];
$emails = [
    'info@your_domain.com' => [
        'connection_type' => 'ssl',
        'host' => 'mail.your_domain.com',
        'port_number' => 465,
        'username' => 'info@your_domain.com',
        'password' => '',
        'from' => 'info@your_domain.com',
        'from_name' => 'your_domain Admin',
    ],
];
define('DB_CONNECTIONS', $database_connections);
define('EMAILS', $emails);
