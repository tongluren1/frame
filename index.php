<?php

require_once './config/const.php';
require_once './app/provider/modelprovider.php';

define('BASE_PATH', __DIR__);
define('CONTROLLER_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controller');
define('PROVIDER_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'provider');
define('SERVICE_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'service');
define('VIEW_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view');
define('LIBS_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'libs');

if(!isset($_GET['c'])) {
	$controller = 'index';
} else {
	$controller = $_GET['c'];
}

include_once './app/controller/' . $controller . 'Controller.php';

if(!isset($_GET['f'])) {
	$function = 'index';
} else {
	$function = $_GET['f'];
}

function __autoload ( string $class ) {
	include_once './app/service/' . $class . '.php';
}

$controllerName = $controller . 'Controller';
$controllerObj = new $controllerName;

return $controllerObj->$function();



?>