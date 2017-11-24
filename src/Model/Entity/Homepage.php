<?php

namespace DouceurVegetale\Model\Entity;

/**
 * Class Homepage
 * @package DouceurVegetale\Model\Entity
 */
class Homepage
{
    /**
     * @var int
     */
    private $homepage_id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Images
     */
    private $images_images_id;

    /**
     * @return int
     */
    public function getHomepageId()
    {
        return $this->homepage_id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return Images
     */
    public function getImagesImagesId()
    {
        return $this->images_images_id;
    }

    /**
     * @param Images $images_images_id
     */
    public function setImagesImagesId($images_images_id)
    {
        $this->images_images_id = $images_images_id;
    }
}



