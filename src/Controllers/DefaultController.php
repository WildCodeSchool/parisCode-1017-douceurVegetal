<?php

namespace MyApp\Controllers;

use MyApp\Model\Repository\UserManager;

/**
 * Class DefaultController
 * @package MyApp\Controllers
 */
class DefaultController extends Controller
{
	/**
	 * Render index
	 */
	public function indexAction(){
		$userManager = new UserManager();
		$allUsers = $userManager->getAll();

		return $this->twig->render('user/home.html.twig', array(
			'allUsers' => $allUsers
		));
	}

	/**
	 * @return string
	 */
	public function showOneAction(){
		$id = $_GET['id'];

		if (is_numeric($id)){
			$userManager = new UserManager();
			$user = $userManager->getOne($id);

			return $this->twig->render('user/showOne.html.twig', array(
				'user' => $user
			));
		}
	}
}