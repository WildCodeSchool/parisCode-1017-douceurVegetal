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
		$statement = $this->db->prepare("SELECT * FROM products WHERE id = :id");
		$statement->execute([
			':id' => $id
		]);
		return $statement->fetch();
	}

	/**
	 * Add one product
	 */
	public function addProduct($name, $description, $categories_categories_id, $images_images_id){
        $statement = $this->db->prepare("INSERT INTO products (name, description, categories_categories_id, images_images_id) VALUES (:name, :description, :categories_categories_id, :images_images_id)");
        $statement->execute(array(
            ':name'=>$name,
            ':description'=>$description,
            ':categories_categories_id'=>$categories_categories_id,
            ':images_images_id'=>$images_images_id
        ));
    }

	/**
	 * Update one product 
	 */
	public function updateProduct($product_name, $description){
        $statement = $this->db->prepare("UPDATE products SET name='$product_name', description='$description' WHERE id='$id'");
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