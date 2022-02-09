<?php

//Fazer alterações para conexões aqui;
define('USER', 'root');
define('PASS', 'Lucas1990');
define('BD', 'DEVPOA_SSO');
define('PORT', '3307' );

$envPath = realpath(dirname(__FILE__).'/../env.ini');
$env = parse_ini_file($envPath);