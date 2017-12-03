<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';
require_once '../app/config.php';

use DouceurVegetale\Controllers\DefaultController;
use DouceurVegetale\Controllers\AdminController;

$defaultController = new DefaultController();
$adminController = new AdminController();
$userController = new \DouceurVegetale\Controllers\UserController();

session_start();

if (!empty($_GET)) {
    if ($_GET['section'] == 'products') {
        echo $defaultController->showProductsAction();
    } elseif ($_GET['section'] == 'values') {
        echo $defaultController->showValuesAction();
    } elseif ($_GET['section'] == 'contact') {
        echo $defaultController->showContactAction();
    } elseif ($_GET['section'] == 'login') {
        echo $userController->loginAction();
    } elseif ($_GET['section'] == 'admin' && isset($_SESSION['connect'])) {
        if ($_GET['page'] == 'dashboard') {
            echo $adminController->showDashboardAction();
        } elseif ($_GET['page'] == 'adminproducts') {
            echo $adminController->showAdminproductsAction();
        } elseif ($_GET['page'] == 'adminhomepage') {
            echo $adminController->showAdminHomepageAction();
        } elseif ($_GET['page'] == 'adminshopinfos') {
            echo $adminController->showAdminshopinfosAction();
        } elseif ($_GET['page'] == 'adminhomepage') {
            echo $adminController->showAdminHomepageAction();
        } elseif ($_GET['page'] == 'updateshopinfos' && isset($_GET['id'])) {
            echo $adminController->showUpdateshopinfosAction();
        } elseif ($_GET['page'] == 'updatehomepage' && isset($_GET['id'])) {
            echo $adminController->showUpdatehomepageAction();
        } elseif ($_GET['page'] == 'addproduct') {
            echo $adminController->showAddproductAction();
        } elseif ($_GET['page'] == 'updateproducts' && isset($_GET['id'])) {
            echo $adminController->showUpdateproductsAction();
        } elseif ($_GET['page'] == 'deleteproducts' && isset($_GET['id'])) {
            echo $adminController->deleteProductAction();
        } elseif ($_GET['page'] == 'logout') {
            echo $userController->logoutAction();
        } else {
            echo $adminController->showAdminAction();
        }
    }
} else {
    echo $defaultController->indexAction();
}