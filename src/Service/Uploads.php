<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 05/12/2017
 * Time: 15:09
 */

namespace DouceurVegetale\Service;

class Uploads
{
    /**
     * Uploads directory
     * @var string
     */
    const DIR_PATH = "uploads/";

    /**
     *
     * Méthode permettant de vérifier les erreurs et contraintes liées au fichier
     *
     * @param UploadedFile $file
     * @return null|string
     */
    public function checkError(UploadedFile $file){
        $errors = [];
        $allowed = array ('jpg', 'png', 'gif');

        if ($file->getSize() > 1047829){
            return $errors = 'Votre fichier est trop lourd';
        }
        elseif (!in_array($file->getExt(), $allowed)){
            return $errors = 'Types de fichiers autorisés : jpg, png et gif.';
        }
        else{
            return $errors = null;
        }
    }

    /**
     *
     * Méthode permettant l'upload du fichier
     *
     * @param $file
     * @return bool|null|string
     */
    public function upload(UploadedFile $file){
        $error = $this->checkError($file);

        if ($error == null){
           move_uploaded_file($file->getTmpName(), $file->getFileName());
        }
        return $error;
    }
}