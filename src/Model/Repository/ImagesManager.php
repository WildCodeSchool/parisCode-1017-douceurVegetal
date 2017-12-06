<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 24/11/2017
 * Time: 11:42
 */

namespace DouceurVegetale\Model\Repository;

use DouceurVegetale\Model\Entity\Categories;
use DouceurVegetale\Model\Entity\Images;
use \PDO;

class ImagesManager extends EntityManager
{

    /**
     * Get all images
     * @return array
     */
    public function getAllImages()
    {
        $statement = $this->db->query('SELECT * FROM images');
        return $statement->fetchAll(PDO::FETCH_CLASS, Images::class);
    }

    /**
     * Get one image
     * @param $id int
     * @return mixed
     */
    public function getOneImage($id)
    {
        $statement = $this->db->prepare("SELECT * FROM images WHERE images_id = :id");
        $statement->execute([
            ':id' => $images_id
        ]);
        return $statement->fetchObject(Images::class);
    }

    /**
     * Update one image
     */
    public function updateImage($images_id, $url)
    {

        $statement = $this->db->prepare("UPDATE images SET url=:url WHERE images_id=:id");
        $statement->execute([
            ':id' => $images_id,
            ':url' => $url
        ]);
    }

}