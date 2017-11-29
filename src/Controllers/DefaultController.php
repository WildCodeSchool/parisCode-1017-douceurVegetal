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
class DefaultController extends Controller
{
    /**
     * Render index
     */
    public function indexAction()
    {
        $shopinfosManager = new ShopinfosManager();
        $homepageManager = new HomepageManager();
        $homepage = $homepageManager->getAllHomepage();
        $shopinfos = $shopinfosManager->getAllShopinfos();
        return $this->twig->render('user/home.html.twig',  array(
            'homepage' => $homepage,
            'shopinfos' => $shopinfos
        ));
        /*$homepageManager = new HomepageManager();
        $homepage = $homepageManager->getAllHomepage();
        return $this->twig->render('user/home.html.twig', array(
            'homepage' => $homepage
        ));*/
    }

    /**
     * Render products page
     */
    public function showProductsAction()
    {
        $productManager = new ProductManager();
        $products = $productManager->getAllProducts();
        $shopinfosManager = new ShopinfosManager();
        $shopinfos = $shopinfosManager->getAllShopinfos();
        return $this->twig->render('user/products.html.twig', array_merge(array('products' => $products), array('shopinfos' => $shopinfos)));
    }

    /**
     * Render values page
     */
    public function showValuesAction()
    {
        $shopinfosManager = new ShopinfosManager();
        $shopinfos = $shopinfosManager->getAllShopinfos();
        return $this->twig->render('user/values.html.twig', array(
            'shopinfos' => $shopinfos));
    }

    /**
     * Render contact page
     */
    public function showContactAction()
    {
        $shopinfosManager = new ShopinfosManager();
        $shopinfos = $shopinfosManager->getAllShopinfos();
        return $this->twig->render('user/contact.html.twig', array(
            'shopinfos' => $shopinfos
        ));
    }
    

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