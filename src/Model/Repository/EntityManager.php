<?php

namespace DouceurVegetale\Model\Repository;

use PDO;
use PDOException;

/**
 * Class EntityManager
 * @package DouceurVegetale\Repository
 */
class EntityManager
{
	/**
	 * @var PDO
	 */
	protected $db;

	/**
	 * EntityManager constructor.
	 */
	public function __construct()
	{
		$dsn = 'mysql:dbname=' . APP_DB_NAME . ';host=' . APP_DB_HOST . ':' . APP_DB_PORT;
		$user = APP_DB_USER;
		$password = APP_DB_PWD;

		try {
			$this->db = new PDO($dsn, $user, $password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
	}
}