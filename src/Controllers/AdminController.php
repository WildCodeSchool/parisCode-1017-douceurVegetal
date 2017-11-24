<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Repository\ShopinfosManager;
use DouceurVegetale\Model\Repository\UserManager;
use DouceurVegetale\Model\Repository\ProductManager;
use DouceurVegetale\Model\Repository\HomepageManager;


/**
 * Class AdminController
 * @package DouceurVegetale\Controllers
 */
class AdminController extends Controller
{

    /**
     * Render admin page (log in)
     */
    public function showAdminAction()
    {
        return $this->twig->render('admin/admin.html.twig');
    }

    /**
     * Render admin dashboard
     */
    public function showDashboardAction()
    {
        return $this->twig->render('admin/dashboard.html.twig');
    }

    /**
     * Render admin products page
     */
    public function showAdminproductsAction()
    {
        $productManager = new ProductManager();
        $products = $productManager->getAllProducts();
        return $this->twig->render('admin/adminproducts.html.twig', array(
            'products' => $products
        ));
    }

    /**
     * Render admin homepage page
     */
    public function showAdminhomeAction()
    {
        return $this->twig->render('admin/adminhome.html.twig');
    }

    public function showAdminHomepageAction()
    {
        $homepageManager = new HomepageManager();
        $homepage = $homepageManager->getAllHomepage();
        return $this->twig->render('admin/adminhome.html.twig', array(
            'homepage' => $homepage
        ));
    }

    /**
     * Render admin shopinfos page
     */
    public function showAdminshopinfosAction()
    {
        $shopinfosManager = new ShopinfosManager();
        $shopinfos = $shopinfosManager->getAllShopinfos();
        return $this->twig->render('admin/adminshopinfos.html.twig', array(
            'shopinfos' => $shopinfos
        ));
    }

}
