<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Repository\UserManager;
use DouceurVegetale\Model\Repository\ProductManager;


/**
 * Class DefaultController
 * @package DouceurVegetale\Controllers
 */
class DefaultController extends Controller
{
    /**
     * Render index
     */
    public function indexAction()
    {

        return $this->twig->render('user/home.html.twig');
    }

    /**
     * Render products page
     */
    public function showProductsAction()
    {
        return $this->twig->render('user/products.html.twig');
    }

    /**
     * Render values page
     */
    public function showValuesAction()
    {
        return $this->twig->render('user/values.html.twig');
    }

    /**
     * Render contact page
     */
    public function showContactAction()
    { if ($contactManager = new ContactManager();
        $contactinfo = $contactManager -> getAllContactInfos();
            return $this->twig->render('user/contact.html.twig', array('contactinfo' => $contactinfo));
    }

    public function showDataUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];


            $manager = new ModelManager();
            $manager->add($username, $password, $role);
            $db = mysqli_connect(SERVER, USER, PASSWORD, BD);
            $resultat = mysqli_query($db, 'SELECT * FROM user');

            while ($resultBdd = mysqli_fetch_all($resultat)) {
                echo $_POST['username'];
                echo $_POST['password'];
                echo $_POST['role'];

            }

            return $this->twig->render('user/home.html.twig');
        }
        return $this->twig->render('user/success.html.twig');
    }

    public function editData()
    {
        return $this->twig->render('user/modify.html.twig');
    }

    public function deleteData()
    {
        return $this->twig->render('delete/.html.twig');
    }

    }