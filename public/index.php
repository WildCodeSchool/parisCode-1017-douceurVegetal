<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';
require_once '../app/config.php';

use DouceurVegetale\Controllers\DefaultController;
use DouceurVegetale\Controllers\AdminController;

$defaultController = new DefaultController();
$adminController = new AdminController();

if (!empty($_GET)) {
    if ($_GET['section'] == 'products') {
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
    } elseif ($_GET['section'] == 'updateshopinfos' && isset($_GET['id'])) {
        echo $adminController->showUpdateshopinfosAction();
    } elseif ($_GET['section'] == 'updatehomepage' && isset($_GET['id'])) {
        echo $adminController->showUpdatehomepageAction();
    } elseif ($_GET['section'] == 'addproduct') {
        echo $adminController->showAddproductAction();
    }
} elseif (!empty($_POST)) {
    if ($_POST['action'] == 'updateshopinfos') {
        echo $adminController->updateshopinfosAction();
    } elseif ($_POST['action'] == 'updatehomepage') {
        echo $adminController->updatehomepageAction();
    } elseif ($_POST['action'] == 'addproduct') {
        echo $adminController->addproductAction();
    }
} else {
    echo $defaultController->indexAction();
}
