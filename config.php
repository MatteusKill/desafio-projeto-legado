<?php

define('BASE_DIR', dirname(__FILE__));
define('VIEW', BASE_DIR .  '/View');
define('URL_BASE', '/');

$_ENV['db']['host'] = getenv('DB_HOST') ?: 'host.docker.internal';
$_ENV['db']['user'] = getenv('DB_USERNAME') ?: 'root';
$_ENV['db']['pass'] = getenv('DB_PASSWORD') ?: '123';
$_ENV['db']['database'] = getenv('DB_DATABASE') ?: 'desafio_senac';
?>