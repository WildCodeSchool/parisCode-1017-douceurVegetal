<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Repository\ContactManager;
use DouceurVegetale\Model\Repository\ShopinfosManager;
use DouceurVegetale\Model\Repository\UserManager;
use DouceurVegetale\Model\Repository\ProductManager;
use DouceurVegetale\Model\Repository\HomepageManager;


/**
 * Class DefaultController
 * @package DouceurVegetale\Controllers
 */
class LoginController extends Controller
{
    /**
     * Start session
     */

    public function loginAction()
    {
        session_start();
        if (empty($_POST)) {
            return $this->twig->render('admin.html.twig');
        } else {
            if (empty($_POST['username'])) {
                $error = "Tous les champs sont obligatoires";
                return $this->twig->render('admin.html.twig', array(
                    'error' => $error,
                ));
            } elseif (empty($_POST['password'])) {
                $error = "Tous les champs sont obligatoires";
                return $this->twig->render('admin.html.twig', array(
                    'error' => $error,
                ));
            } else {
                $_SESSION['loginname'] = $_POST['loginname'];
                return $this->twig->render('dashboard.html.twig', array(
                    'session' => $_SESSION,
                    'cookie' => $_COOKIE,
                    'post' => $_POST
                ));
            }
        }
    }
}