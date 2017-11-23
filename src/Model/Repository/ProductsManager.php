<?php

namespace DouceurVegetale\Model\Repository;

use PDO;
use DouceurVegetale\Model\Repository\Products;


class ProductsManager extends EntityManager
{
	/**
	 * Get all products
	 * @return array
	 */
	public function getAllProducts(){
		$statement = $this->db->query('SELECT * FROM products');
		return $statement->fetchAll(PDO::FETCH_OBJ, Products::class);
	}

	/**
	 * Get one product
	 * @param $id int
	 * @return mixed
	 */
	public function getOneProduct($id){
		$statement = $this->db->prepare("SELECT * FROM products WHERE id = :id");
		$statement->execute([
			':id' => $id
		]);
		return $statement->fetch();
	}

	/**
	 * Add one product
	 */
	public function addProduct($product_name, $description){
        mysqli_query($this->db, "INSERT INTO products (name, description) VALUES ('$product_name', '$description')");
    }

	/**
	 * Update one product 
	 */
	public function updateProduct($product_name, $description){
        mysqli_query($this->db, "UPDATE products SET name='$product_name', description='$description' WHERE id='$id'");
	}

	/**
	 * Delete one product
	 */
	public function deleteProduct(){
        mysqli_query($this->db, "DELETE * FROM products WHERE id='$id'");
	}

}