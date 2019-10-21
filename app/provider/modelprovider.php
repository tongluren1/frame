<?php

$modelArr = array(
	'Smarty' => ['./libs/smarty-3.1.33/libs/Autoloader.php', './libs/smarty-3.1.33/libs/Smarty.class.php']
);

foreach ($modelArr as $modelName => $modelPaths) {
	foreach ($modelPaths as $modelPath) {
		include_once $modelPath;
	}
}



?>