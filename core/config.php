<?php

defined("DS")
    || define("DS", DIRECTORY_SEPARATOR);

defined("ROOT")
    || define("ROOT", realpath(dirname(__FILE__) . DS."..".DS));

defined("CLS")
    || define("CLS", ".class");

defined("EXT")
    || define("EXT", ".php");


$path = [
    'public_dir' => 'public',
    'core_dir' => 'core',
    'classes_dir' => 'classes',
    'style_dir' => 'style',
    'template_dir' => 'template',
    'media_dir' => 'media'
];

foreach ($path as $item => $value) {
    define(strtoupper($item), $value);
}


$GLOBALS['config'] = [
    'mysql' => [
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'name' => 'badsha_mp'
    ],
    'pdo' => [
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'name' => 'rajshahi'
    ],
    'session' => [
        'session_name' => 'user',
        'session_token' => 'token'
    ],
    'cookie' => [
        'cookie_name' => 'cookie',
        'cookie_expiry' => 604840
    ],
];