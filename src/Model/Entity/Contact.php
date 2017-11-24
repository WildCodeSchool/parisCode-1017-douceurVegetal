<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 24/11/2017
 * Time: 12:11
 */

namespace DouceurVegetale\Model\Entity;


class Contact
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
     * @var Categorie
     */
    private $address;

    /**
     * @var Image
     */
    private $hours;

    /**
     * @return int
     */

    public function getContactId()
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
     * @return address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Categorie $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return hours
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }


}