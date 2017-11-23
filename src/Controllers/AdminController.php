<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Repository\UserManager;
use DouceurVegetale\Model\Repository\ProductManager;


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

    /**
     * Render admin contact page
     */
    public function showAdmincontactAction()
    {
        return $this->twig->render('admin/admincontact.html.twig');
    }

}
