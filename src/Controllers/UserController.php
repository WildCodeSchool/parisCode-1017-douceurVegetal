<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Entity\User;
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
            return $this->twig->render('admin/admin.html.twig');
        } else {
            if (empty($_POST['username'])) {
                $error = "Merci de remplir tous les champs.";
                return $this->twig->render('admin/admin.html.twig', array(
                    'error' => $error
                ));
            } else {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $userManager = new UserManager();
                $passwordUser = $userManager->getUser($username);

                if ($passwordUser == false) {
                    $error = "Vous n'êtes pas enregistré.e, merci de contacter les administratrices.";
                    return $this->twig->render('admin/admin.html.twig', array(
                        'error' => $error
                    ));
                } elseif (password_verify($password, $passwordUser->getPassword())) {
                    $_SESSION['connect'] = $username;
                    return $this->twig->render('admin/dashboard.html.twig', array(
                        'session' => $_SESSION,
                    ));
                } else {
                    return $this->twig->render('admin/admin.html.twig');
                }
            }
        }
    }

    public function logoutAction()
    {
        session_unset();
        session_destroy();
        return $this->twig->render('admin/admin.html.twig');
    }
}