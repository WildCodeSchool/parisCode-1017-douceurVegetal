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
}