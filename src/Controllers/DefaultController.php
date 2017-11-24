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
        $productManager = new ProductManager();
        $products = $productManager->getAllProducts();
        return $this->twig->render('user/products.html.twig', array(
            'products' => $products));
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
    {
        return $this->twig->render('user/contact.html.twig');
    }

    /**
     * à changer
     */

    public function showDataUser()
    {

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