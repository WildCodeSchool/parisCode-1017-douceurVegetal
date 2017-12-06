<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Entity\Product;
use DouceurVegetale\Model\Repository\CategoriesManager;
use DouceurVegetale\Model\Repository\ImagesManager;
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
     * Function delete product works magic!!!
     */
    public function deleteProductAction()
    {
        $id = $_GET['id'];
        $productManager = new ProductManager();
        $productManager->deleteProduct($id);
        header('Location: index.php?section=admin&page=adminproducts');
    }

    /**
     * Render admin updateproducts page
     */
    public function showUpdateproductsAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $productManager = new ProductManager();
                $id = $_GET['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $category = $_POST['category'];
                $url = $_POST['images_url'];
                $productManager->updateProduct($id, $name, $description, $category, $url);
                header('Location: index.php?section=admin&page=adminproducts');
            } else {
        	// Get all categ from BDD
        	$categoriesManager = new CategoriesManager();
	        $categories = $categoriesManager->getAllCategories();

            $productManager = new productManager();
            $id = $_GET['id'];
            $products = $productManager->getOneProduct($id);
            return $this->twig->render('admin/updateproducts.html.twig', array(
                'products' => $products,
	            'categories' => $categories
            ));
        }
    }


    /**
     * Render admin addproduct page
     */
    public function showAddproductAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty('name')) {
                $errors[] = "Veuillez ajouter un nom.";
            } elseif (empty('description')) {
                $errors[] = "Veuillez ajouter une description.";
            } elseif (empty('images_images_id')) {
                $errors[] = "Veuillez ajouter une image.";
            } else {
                $productManager = new ProductManager();
                $name = $_POST['name'];
                $description = $_POST['description'];
                $categories_categories_id = $_POST['categories_categories_id'];
                $images_images_id = $_POST['images_images_id'];
                $productManager->addProduct($name, $description, $categories_categories_id, $images_images_id);
                header('Location: index.php?section=admin&page=adminproducts', array(
                    'errors' => $errors
                ));
            }
        } else {
            $categoriesMAnager = new CategoriesManager();
            $categories = $categoriesMAnager->getAllCategories();
            return $this->twig->render('admin/addproduct.html.twig', array(
                'categories' => $categories
            ));
        }
    }


    /**
     * Render admin homepage page
     */
    public function showAdminHomepageAction()
    {
        $homepageManager = new HomepageManager();
        $homepage = $homepageManager->getAllHomepage();
        return $this->twig->render('admin/adminhomepage.html.twig', array(
            'homepage' => $homepage
        ));
    }

    /**
     * Render admin updatehomepage page
     */
    public function showUpdatehomepageAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $homepageManager = new HomepageManager();
            $id = $_GET['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $homepageManager->updateHomepage($id, $title, $description);
            header('Location: index.php?section=admin&page=adminhomepage');
        } else {
            $homepageManager = new HomepageManager();
            $id = $_GET['id'];
            $homepage = $homepageManager->getOneHomepage($id);
            return $this->twig->render('admin/updatehomepage.html.twig', array(
                'homepage' => $homepage,
                'id' => $id
            ));
        }
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $shopinfosManager = new ShopinfosManager();
            $telephone = $_POST['telephone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $hours = $_POST['hours'];
            $id = $_GET['id'];
            $shopinfosManager->updateShopinfo($telephone, $address, $email, $hours, $id);
            header('Location: index.php?section=admin&page=adminshopinfos');
        } else {
            $shopinfosManager = new ShopinfosManager();
            $id = $_GET['id'];
            $shopinfos = $shopinfosManager->getOneShopinfo($id);
            return $this->twig->render('admin/updateshopinfos.html.twig', array(
                'shopinfos' => $shopinfos,
            ));
        }
    }

}