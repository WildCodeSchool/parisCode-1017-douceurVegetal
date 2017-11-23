<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Repository\UserManager;
use DouceurVegetale\Model\Repository\ProductsManager;


/**
 * Class DefaultController
 * @package DouceurVegetale\Controllers
 */
class DefaultController extends Controller
{
	/**
	 * Render index
	 */
	public function indexAction(){

		return $this->twig->render('user/home.html.twig');
	}

	/**
	 * @return string
	 */
	public function showProductsAction(){
        return $this->twig->render('user/products.html.twig');
    }

    public function showValuesAction(){
        return $this->twig->render('user/values.html.twig');
    }

    public function showContactAction(){
        return $this->twig->render('user/contact.html.twig');
    }

<<<<<<< HEAD
   public function showDataUser(){
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        

        $manager = new ModelManager();
        $manager->add($username, $password, $role);
        $db = mysqli_connect(SERVER, USER, PASSWORD, BD);
        $resultat = mysqli_query($db, 'SELECT * FROM user');

        while($resultBdd = mysqli_fetch_all($resultat))
        {
            echo $_POST['username'];
            echo $_POST['password'];
            echo $_POST['role'];
            
        }

        return $this->twig->render('user/home.html.twig');
    }
    return $this->twig->render('user/success.html.twig');
	}
    public function editData(){
        return $this->twig->render('user/modify.html.twig');
    }
    public function deleteData(){
        return $this->twig->render('delete/.html.twig');
    }

    /**
	 * Products functions
	 */

    public function showDataProducts(){
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $product_name = $_POST['name'];
        $description = $_POST['description'];
        $categorie = $_POST['categorie'];
        $image = $_POST['image'];
        

        $manager = new ModelManager();
        $manager->add($product_name, $description, $categorie);
        $db = mysqli_connect(SERVER, USER, PASSWORD, BD);
        $resultat = mysqli_query($db, 'SELECT * FROM products');

        while($resultBdd = mysqli_fetch_all($resultat))
        {
            echo $_POST['name'];
            echo $_POST['description'];
            echo $_POST['categorie'];
            
        }

        return $this->twig->render('user/home.html.twig');
=======
    public function showAdminAction(){
        return $this->twig->render('admin/admin.html.twig');
    }

    public function showDashboardAction(){
        return $this->twig->render('admin/dashboard.html.twig');
    }

    public function showAdminproductsAction(){
        return $this->twig->render('admin/adminproducts.html.twig');
    }

    public function showAdminhomeAction(){
        return $this->twig->render('admin/adminhome.html.twig');
    }

    public function showAdmincontactAction(){
        return $this->twig->render('admin/admincontact.html.twig');
>>>>>>> 4973d972742a5cb6792803bb4c2d15c944b49792
    }
}