<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';
require_once '../app/config.php';

use DouceurVegetale\Controllers\DefaultController;
use DouceurVegetale\Controllers\AdminController;

$defaultController = new DefaultController();
$adminController = new AdminController();

if (empty($_GET)) {
    echo $defaultController->indexAction();
} elseif ($_GET['section'] == 'products') {
    echo $defaultController->showProductsAction();
} elseif ($_GET['section'] == 'values') {
    echo $defaultController->showValuesAction();
} elseif ($_GET['section'] == 'contact') {
    echo $defaultController->showContactAction();
} elseif ($_GET['section'] == 'admin') {
    echo $adminController->showAdminAction();
} elseif ($_GET['section'] == 'dashboard') {
    echo $adminController->showDashboardAction();
} elseif ($_GET['section'] == 'adminproducts') {
    echo $adminController->showAdminproductsAction();
} elseif ($_GET['section'] == 'adminhome') {
    echo $adminController->showAdminhomeAction();
} elseif ($_GET['section'] == 'adminshopinfos') {
    echo $adminController->showAdminshopinfosAction();
} elseif ($_GET['section'] == 'adminhomepage') {
    echo $adminController->showAdminHomepageAction();
} elseif ($_GET['section'] == 'updateshopinfos') {
    echo $adminController->showUpdateshopinfosAction();
}


