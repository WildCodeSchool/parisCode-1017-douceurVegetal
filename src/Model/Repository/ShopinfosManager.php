<?php

namespace DouceurVegetale\Model\Repository;

use DouceurVegetale\Model\Entity\Product;
use PDO;


class ShopinfosManager extends EntityManager
{
    /**
     * Get all shopinfos
     * @return array
     */
    public function getAllShopinfos()
    {
        $statement = $this->db->query('SELECT * FROM shop_infos');
        return $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
    }

    /**
     * Get one shopinfo
     * @param $id int
     * @return mixed
     */
    public function getOneShopinfo($id)
    {
        $statement = $this->db->prepare("SELECT * FROM shop_infos WHERE id = :id");
        $statement->execute([
            ':id' => $id
        ]);
        return $statement->fetch();
    }

    /**
     * Update one shopinfo
     */
    public function updateShopinfo($telephone, $address, $email, $hours)
    {
        $statement = $this->db->prepare("UPDATE shop_infos SET telephone='$telephone', address='$address', email='$email', hours='$hours' WHERE id='$id'");
        $statement->execute([
            ':id' => $id
        ]);
    }

}