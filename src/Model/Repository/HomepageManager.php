<?php

namespace DouceurVegetale\Model\Repository;

use DouceurVegetale\Model\Entity\Homepage;
use \PDO;


class HomepageManager extends EntityManager
{
    /**
     * Get all homepage
     * @return array
     */
    public function getAllHomepage()
    {
        $statement = $this->db->query('SELECT * FROM homepage INNER JOIN images ON images_images_id = images.images_id');
        return $statement->fetchObject('DouceurVegetale\Model\Entity\Homepage');
    }

    public function getAllShopinfos()
    {
        $statement = $this->db->query('SELECT * FROM shop_infos');
        return $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
    }

    /**
     * Get one homepage
     * @param $id int
     * @return mixed
     */
    public function getOneHomepage($id)
    {
        $statement = $this->db->prepare("SELECT * FROM homepage WHERE homepage_id = :id");
        $statement->execute([
            ':id' => $id
        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Update one homepage
     */
    public function updateHomepage($homepage_id, $title, $description, $images_images_id)
    {
        $statement = $this->db->prepare("UPDATE homepage SET title=:title, description=:description, images_images_id=:images_images_id WHERE homepage_id=:homepage_id");
        $statement->execute([
            ':homepage_id' => $homepage_id,
            ':title' => $title,
            ':description' => $description,
            ':images_images_id' => $images_images_id,
        ]);
    }

}