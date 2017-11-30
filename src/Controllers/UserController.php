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
class UserController extends Controller
{
    /**
     * Start session
     */

    public function loginAction()
    {
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
                if (!$identification) {
                    echo 'Vos identifiants sont incorrects.';
                } else {

                    session_start();

                    $userManager = new UserManager();
                    $users = $userManager->getAllUser();
                    $identification = $userManager->verifyUser();

                    var_dump($userManager); die();

                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];

                    $_SESSION['username'] = $identification['username'];
                    $_SESSION['password'] = $identification['password'];

                    return $this->twig->render('dashboard.html.twig', array(
                        'session' => $_SESSION,
                        'cookie' => $_COOKIE,
                        'post' => $_POST
                    ));
                }
            }
        }
    }

}