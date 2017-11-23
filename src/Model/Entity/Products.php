<?php

namespace DouceurVegetale\Model\Entity;

/**
 * Class User
 * @package DouceurVegetale\Model\Entity
 */
class Products
{
	
	private $product_name;

	/**
	 * @var string
	 */
	private $description;


	/**
	 * @var string
	 */
	private $categorie;

	/**
	 * @var string
	 */
	private $image;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->product_name;
	}

	/**
	 * @param string $product_name
	 */
	public function setName($product_name)
	{
		$this->product_name = $product_name;
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
	 * @return string 
	 */
	public function getCategorie()
	{
		return $this->categorie;
	}

	/**
	 * @param string $categorie
	 */
	public function setCategorie($description)
	{
		$this->categorie = $categorie;
	}

	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param string $image
	 */
	public function setImage($image)
	{
		$this->image = $image;
	}

}