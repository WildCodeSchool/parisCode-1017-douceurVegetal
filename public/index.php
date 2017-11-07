<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';
require_once '../app/config.php';

use MyApp\Controllers\DefaultController;

if (empty($_GET)){
	$defaultController = new DefaultController();
	echo $defaultController->indexAction();
}
elseif (isset($_GET['id'])){
	$defaultController = new DefaultController();
	echo $defaultController->showOneAction();
}