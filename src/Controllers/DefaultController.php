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
}