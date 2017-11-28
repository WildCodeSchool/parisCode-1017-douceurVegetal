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
     * Render admin updateproducts page
     */
    public function showUpdateproductsAction()
    {
        $productManager = new productManager();
        $id = $_GET['id'];
        $products = $productManager->getOneProduct($id);
        return $this->twig->render('admin/updateproducts.html.twig', array(
            'products' => $products,
            'id' => $id
        ));
    }

    /**
     * Render admin updateproducts 2
     */
    public function updateproductsAction()
    {
        $productManager = new productManager();
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['categories_categories_id'];
        $image = $_POST['images_images_id'];
        $productManager->updateProduct($id, $name, $description, $category, $image);
        header('Location: index.php?section=adminproducts');
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

    /**
     * Render admin updateshopinfos page
     */
    public function showUpdateshopinfosAction()
    {
        $shopinfosManager = new ShopinfosManager();
        $id = $_GET['id'];
        $shopinfos = $shopinfosManager->getOneShopinfo($id);
        return $this->twig->render('admin/updateshopinfos.html.twig', array(
            'shopinfos' => $shopinfos,
            'id' => $id
        ));
    }

    /**
     *
     */
    public function updateshopinfosAction()
    {
        $shopinfosManager = new ShopinfosManager();
        $telephone = $_POST['telephone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $hours = $_POST['hours'];
        $id = $_POST['id'];
        $shopinfosManager->updateShopinfo($telephone, $address, $email, $hours, $id);
        header('Location: index.php?section=adminshopinfos');
    }


}
