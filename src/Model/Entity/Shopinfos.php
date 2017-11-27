<?php

namespace DouceurVegetale\Model\Entity;

/**
 * Class Shopinfos
 * @package DouceurVegetale\Model\Entity
 */
class Shopinfos
{

    /**
     * @var int
     */
    private $shop_infos_id;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $address;

    /**
     * @return int
     */
    public function getShopInfosId()
    {
        return $this->shop_infos_id;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param string $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @var string
     */
    private $hours;

}

