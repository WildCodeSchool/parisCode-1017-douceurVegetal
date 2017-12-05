<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 24/11/2017
 * Time: 11:42
 */

namespace DouceurVegetale\Model\Repository;

use DouceurVegetale\Model\Entity\Categories;
use \PDO;

class CategoriesManager extends EntityManager
{
    /**
     * Get all categories
     * @return array
     */
    public function getAllCategories()
    {
        $statement = $this->db->query('SELECT * FROM categories');
        return $statement->fetchAll(PDO::FETCH_CLASS, Categories::class);
    }

    /**
     * Get one category
     * @param $id int
     * @return mixed
     */
    public function getOneCategory($id)
    {
        $statement = $this->db->prepare("SELECT * FROM categories WHERE categories_id = :id");
        $statement->execute([
            ':id' => $id
        ]);
        return $statement->fetchObject(Categories::class);
    }

    /**
     * Update one category
     */
    public function updateProduct($categories_id, $category)
    {

        $statement = $this->db->prepare("UPDATE categories SET category=:category WHERE categories_id=:id");
        $statement->execute([
            ':id' => $categories_id,
            ':category' => $category
        ]);
    }
}