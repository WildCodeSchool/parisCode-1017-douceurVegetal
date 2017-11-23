<?php

namespace DouceurVegetale\Controllers;

use DouceurVegetale\Model\Repository\UserManager;

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
    }
}