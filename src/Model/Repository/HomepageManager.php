<?php

namespace DouceurVegetale\Model\Repository;

use DouceurVegetale\Model\Entity\Homepage;
use PDO;


class HomepageManager extends EntityManager
{
    /**
     * Get all homepage
     * @return array
     */
    public function getAllHomepage()
    {
        $statement = $this->db->query('SELECT * FROM homepage');
        return $statement->fetchObject('DouceurVegetale\Model\Entity\Homepage');
    }

    /**
     * Get one homepage
     * @param $id int
     * @return mixed
     */
    public function getOneHomepage($id)
    {
        $statement = $this->db->prepare("SELECT * FROM homepage WHERE id = :id");
        $statement->execute([
            ':id' => $id
        ]);
        return $statement->fetch();
    }

    /**
     * Update one homepage
     */
    public function updateHomepage($title, $description, $images_images_id)
    {
        $statement = $this->db->prepare("UPDATE homepage SET title='$title', description='$description', images_images_id='$images_images_id' WHERE id='$id'");
        $statement->execute([
            ':id' => $id
        ]);
    }

}