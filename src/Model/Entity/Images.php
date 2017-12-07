<?php
/**
 * Created by PhpStorm.
 * User: Emeline
 * Date: 04/12/2017
 * Time: 18:11
 */

namespace DouceurVegetale\Model\Entity;


class Images
{
    /**
     * @var int
     */
    private $images_id;

    /**
     * @var string
     */
    private $url;

    /**
     * @return int
     */
    public function getImagesId()
    {
        return $this->images_id;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


}