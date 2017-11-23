<?php

namespace DouceurVegetale\Model\Entity;

/**
 * Class User
 * @package DouceurVegetale\Model\Entity
 */
class User
{

    /**
     * @var int
     */
    private $user_id;

    /**
	 * @var string
	 */
	private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $role;

    /**
     * @return int
     */
    public function getUserid()
    {
        return $this->user_id;
    }

	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param int $user_id
     */
    public function setUserid($user_id)
    {
        $this->user_id = $user_id;
    }

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

}