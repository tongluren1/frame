<?php

$modelArr = array(
	'Smarty' => [
		'.' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'smarty-3.1.33' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'Autoloader.php',
		'.' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'smarty-3.1.33' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'bootstrap.php']
);

foreach ($modelArr as $modelName => $modelPaths) {
	foreach ($modelPaths as $modelPath) {
		include_once $modelPath;
	}
}



?>