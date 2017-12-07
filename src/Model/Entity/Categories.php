<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 24/11/2017
 * Time: 12:11
 */
namespace DouceurVegetale\Model\Entity;

class Categories
{
    /**
     * @var int
     */
    private $categories_id;
    /**
     * @var string
     */
    private $category;
    /**
     * @return int
     */
    public function getCategoriesId()
    {
        return $this->categories_id;
    }
    /**
     * @return string
     */
    public function getCategories()
    {
        return $this->category;
    }
    /**
     * @param string $category
     */
    public function setCategories($category)
    {
        $this->category = $category;
    }
}