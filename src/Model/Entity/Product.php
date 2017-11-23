<?php

namespace DouceurVegetale\Model\Entity;

/**
 * Class User
 * @package DouceurVegetale\Model\Entity
 */
class Product
{

    /**
     * @var int
     */
    private $products_id;

    /**
     * @var string
     */
	private $name;

	/**
	 * @var string
	 */
	private $description;


	/**
	 * @var Categorie
	 */
	private $categories_categories_id;

	/**
	 * @var Image
	 */
	private $images_images_id;

    /**
     * @return int
     */
    public function getProductsId()
    {
        return $this->products_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return Categorie
     */
    public function getCategorie()
    {
        return $this->categories_categories_id;
    }

    /**
     * @param Categorie $categorie
     */
    public function setCategorie($categories_categories_id)
    {
        $this->categories_categories_id = $categories_categories_id;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->images_images_id;
    }

    /**
     * @param Image $image
     */
    public function setImage($image)
    {
        $this->images_images_id = $images_images_id;
    }

}