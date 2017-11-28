<?php

namespace DouceurVegetale\Model\Repository;

use DouceurVegetale\Model\Entity\Product;
use PDO;


class ProductManager extends EntityManager
{
	/**
	 * Get all products
	 * @return array
	 */
	public function getAllProducts(){
		$statement = $this->db->query('SELECT * FROM products INNER JOIN images ON images_images_id = images.images_id');
		return $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
	}

	/**
	 * Get one product
	 * @param $id int
	 * @return mixed
	 */
	public function getOneProduct($id){
		$statement = $this->db->prepare("SELECT * FROM products WHERE products_id = :id");
		$statement->execute([
			':id' => $id
		]);
		return $statement->fetch(PDO::FETCH_ASSOC);
	}

	/**
	 * Add one product
	 */
	public function addProduct($product_name, $description){
        $statement = $this->db->prepare("INSERT INTO products (name, description) VALUES ('$product_name', '$description')");
        $statement->execute([
			':id' => $id
		]);
    }

	/**
	 * Update one product 
	 */
	public function updateProduct($id, $name, $description, $category, $image){

        $statement = $this->db->prepare("UPDATE products SET name='$name', description='$description', categories_categories_id ='$category', images_images_id='$image' WHERE products_id='$id'");
        $statement->execute([
			':id' => $id
		]);
	}

	/**
	 * Delete one product
	 */
	public function deleteProduct(){
        $statement = $this->db->prepare("DELETE * FROM products WHERE id='$id'");
        $statement->execute([
			':id' => $id
		]);
	}

}