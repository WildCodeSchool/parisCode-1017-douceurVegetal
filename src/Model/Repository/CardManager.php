<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 05/12/2017
 * Time: 15:20
 */

namespace DouceurVegetale\Model\Repository;


class CardManager extends EntityManager
{ 	/**
 * Get all user
 * @return array
 */
    public function getAll(){
//		Définition de la requete
        $req = $this->db->query('SELECT * FROM images');

//		Traitement et renvoie du résultat
        return $req->fetchAll();
    }

    /**
     * Add image in bdd
     * @param $url
     */
    public function addImage($url){
        // Préparer la requete
        $req = $this->db->prepare("INSERT INTO images (url) VALUES (:url)");
        // Executer la requete
        $req->execute(array(
            ':url' => $url
        ));
    }
    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM images WHERE id= :id");
        $statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $statement->execute(array(
            ':id' => $id
        ));
    }

}