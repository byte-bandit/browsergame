<?php
define('DS', DIRECTORY_SEPARATOR);

define('ROOT',    dirname(dirname(dirname(__FILE__))));
define('APP_DIR', ROOT . DS . 'app');
define('LIB_DIR', ROOT . DS . 'lib');

define('CONFIG_DIR',  APP_DIR . DS . 'Config');
define('ROUTES_DIR',  APP_DIR . DS . 'Routes');
define('UTILITY_DIR', APP_DIR . DS . 'Utility');
define('VIEWS_DIR',   APP_DIR . DS . 'Views');
define('WEBROOT_DIR', APP_DIR . DS . 'webroot');

 
require_once(CONFIG_DIR . DS . 'bootstrap.php');
require_once(CONFIG_DIR . DS . 'config.php');
require_once(CONFIG_DIR . DS . 'database.php');


session_start();

$requestedRoute  = $_GET['route'] ? $_GET['route'] . 'Route' : 'HomeRoute';
$requestedAction = $_GET['action'] ?: 'index';

unset($_GET['route']);
unset($_GET['action']);

$Route = new $requestedRoute;
call_user_func_array(array($Route, $requestedAction), array_values($_GET));
