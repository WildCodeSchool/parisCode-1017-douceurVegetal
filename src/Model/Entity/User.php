<?php

namespace DouceurVegetale\Model\Entity;

/**
 * Class User
 * @package DouceurVegetale\Model\Entity
 */
class User
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $firstname;

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
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * @param string $firstname
	 */
	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;
	}

}