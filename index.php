<?php

require_once './config/const.php';
require_once './app/provider/modelprovider.php';

$s = new Smarty();
var_dump($s);exit;

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