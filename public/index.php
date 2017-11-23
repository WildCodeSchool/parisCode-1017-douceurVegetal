<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';

use DouceurVegetale\Controllers\DefaultController;

$defaultController = new DefaultController();

if (empty($_GET)){
	echo $defaultController->indexAction();
} elseif ($_GET['section']=='products') {
    echo $defaultController->showProductsAction();
} elseif ($_GET['section']=='values') {
    echo $defaultController->showValuesAction();
} elseif ($_GET['section']=='contact') {
    echo $defaultController->showContactAction();
} elseif ($_GET['section']=='admin') {
    echo $defaultController->showAdminAction();
} elseif ($_GET['section']=='dashboard') {
    echo $defaultController->showDashboardAction();
} elseif ($_GET['section']=='adminproducts') {
    echo $defaultController->showAdminproductsAction();
} elseif ($_GET['section']=='adminhome') {
    echo $defaultController->showAdminhomeAction();
} elseif ($_GET['section']=='admincontact') {
    echo $defaultController->showAdmincontactAction();
}