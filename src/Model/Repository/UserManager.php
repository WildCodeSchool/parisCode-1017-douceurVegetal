<?php

namespace DouceurVegetale\Model\Repository;

use PDO;
use MyApp\Model\Entity\User;

/**
 * Class UserManager
 * @package DouceurVegetale\Repository
 */
class UserManager extends EntityManager
{
	/**
	 * Get all user
	 * @return array
	 */
	public function getAll(){
		$statement = $this->db->query('SELECT * FROM user');
		return $statement->fetchAll(PDO::FETCH_OBJ, User::class);
	}

	/**
	 * Get one user
	 * @param $id int
	 * @return mixed
	 */
	public function getOne($id){
		$statement = $this->db->prepare("SELECT * FROM user WHERE id = :id");
		$statement->execute([
			':id' => $id
		]);
		return $statement->fetch();
	}

	/**
	 * Add one user
	 */
	public function add(){
//		....
	}

	/**
	 * Update one user
	 */
	public function update(){
//		....
	}

	/**
	 * Delete one user
	 */
	public function delete(){
//		....
	}
}