<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Repository\ProductManager;

/* add, edit, delete */

/**
 * Class DefaultController
 * @package DouceurVegetale\Controllers
 */
class ProductController extends Controller
{
    /**
     * Product functions
     */

    public function showDataProducts()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $product_name = $_POST['name'];
            $description = $_POST['description'];
            $categorie = $_POST['categorie'];
            $image = $_POST['image'];


            $manager = new ModelManager();
            $manager->add($product_name, $description, $categorie);
            $db = mysqli_connect(SERVER, USER, PASSWORD, BD);
            $resultat = mysqli_query($db, 'SELECT * FROM products');

            while ($resultBdd = mysqli_fetch_all($resultat)) {
                echo $_POST['name'];
                echo $_POST['description'];
                echo $_POST['categorie'];

            }

            return $this->twig->render('user/home.html.twig');
        }
    }

}