<?php

namespace DouceurVegetale\Model\Repository;

use \PDO;
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
	public function getAllUser(){
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
	public function addUser($username, $password, $role){
        mysqli_query($this->db, "INSERT INTO user (username, password, role) VALUES ('$username', '$password', '$role')");
    }

	/**
	 * Update one user
	 */
	public function updateUser(){
//		....
	}

	/**
	 * Delete one user
	 */
	public function deleteUser(){
//		....
	}

    /**
     * Verify one user
     */
    public function verifyUser(){
        $statement = $this->db->prepare('SELECT id FROM user WHERE username=:username AND password=:password');
        $statement->execute(array(
            'username' => $username,
            'password' => $password
        ));
        return $statement->fetch();
    }
}