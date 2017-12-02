<?php

namespace DouceurVegetale\Model\Repository;

use \PDO;
use PDOException;


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
		$dsn = 'mysql:dbname=' . DB . ';host=' . SERVER. ':' . PORT;
		$user = USER;
		$password = PASSWORD;

		try {
			$this->db = new PDO($dsn, $user, $password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
	}
}