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
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userManager = new UserManager();
            $passwordUser = $userManager->getUser($username);

            if (password_verify($password, $passwordUser->getPassword())) {
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