<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');

define("LANGUAGE","pt-br");
define("CHARSET","utf-8");

define("BASE_PATH", "http" . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === "on") ? 's' : '') . "://{$_SERVER['HTTP_HOST']}/development/2021/l2goat");

define('DATA_LAYER_CONFIG', [
	'l2jls' => [ 
		'driver' => 'mysql',
		'host' => 'localhost',
		'port' => '3306',
		'dbname' => 'l2jls',
		'username' => 'root',
		'passwd' => '',
		'options' => [
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
			PDO::ATTR_CASE => PDO::CASE_NATURAL,
		],
	],
	'l2jgs' => [ 
		'driver' => 'mysql',
		'host' => 'localhost',
		'port' => '3306',
		'dbname' => 'l2jgs', 
		'username' => 'root',
		'passwd' => '',
		'options' => [
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
			PDO::ATTR_CASE => PDO::CASE_NATURAL,
		],
	]
]);


define("MAIL", [
    "host" => "smtp.gmail.com",
    "port" => "587",
    "user" => "teste@l2goat.com",
    "passwd" => "teste123",
    "from_name" => "Teste Recuperar Senha",
    "from_email" => "teste@l2goat.com"
]);
