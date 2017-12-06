<?php

namespace DouceurVegetale\Model\Repository;

use DouceurVegetale\Model\Entity\Product;
use \PDO;


class ProductManager extends EntityManager
{
    /**
     * Get all products
     * @return array
     */
    public function getAllProducts()
    {
        $statement = $this->db->query('SELECT * FROM products INNER JOIN images ON images_images_id = images.images_id INNER JOIN categories ON categories_categories_id = categories.categories_id');
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
		return $statement->fetchObject(Product::class);
	}

    /**
     * Add one product
     */
    public function addProduct($name, $description, $categories_categories_id, $url)
    {
        $statement = $this->db->prepare("INSERT INTO images (url) VALUES(:url)");
        $statement->execute(
            [
                ':url' => $url

            ]);
        $idImage = $this->db->lastInsertId();

        $statement = $this->db->prepare("
              INSERT INTO products (name, description, categories_categories_id, images_images_id) 
              VALUES (:name, :description, :categories_categories_id, :images_images_id)
          ");
        $statement->execute(array(
            ':name' => $name,
            ':description' => $description,
            ':categories_categories_id' => $categories_categories_id,
            ':images_images_id' => $idImage
        ));



    }

    /**
     * Update one product
     */
    public function updateProduct($products_id, $name, $description, $categories_categories_id, $images_images_id)
    {

        $statement = $this->db->prepare("UPDATE products SET name=:name, description=:description, categories_categories_id=:categories_categories_id, images_images_id=:images_images_id WHERE products_id=:id");
        $statement->execute([
            ':id' => $products_id,
            ':name' => $name,
            ':description' => $description,
            ':categories_categories_id' => $categories_categories_id,
            ':images_images_id' => $images_images_id
        ]);
    }

    /**
     * Delete one product works magic!
     */
    public function deleteProduct($id)
    {
        $statement = $this->db->prepare("DELETE FROM products WHERE products_id= :id");
        $statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $statement->execute(array(
            ':id' => $id
        ));
    }

}
