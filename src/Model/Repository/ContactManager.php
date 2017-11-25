<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 24/11/2017
 * Time: 11:42
 */

namespace DouceurVegetale\Model\Repository;


class ContactManager
{
    /**
     * Get all products
     * @return array
     */
    public function getAllContactInfos(){
        $statement = $this->db->query('SELECT * FROM shop_infos');
        return $statement->fetchAll(PDO::FETCH_CLASS, Contact::class);
    }

    /**
     * Get one product
     * @param $id int
     * @return mixed
     */
    public function getEmail($id){
        $statement = $this->db->prepare("SELECT * FROM products WHERE id = :id");
        $statement->execute([
            ':id' => $id
        ]);
        return $statement->fetch();
    }

}