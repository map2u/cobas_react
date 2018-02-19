<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * RightSidebarAdvertItem
 */
class RightSidebarAdvertItem {

    use ORMBehaviors\Translatable\Translatable;

    /**
     * @var guid
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $seq;

    /**
     * @var string
     */
    private $iconClass;

    /**
     * @var string
     */
    private $images;

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return RightSidebarAdvertItem
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set seq
     *
     * @param string $seq
     * @return RightSidebarAdvertItem
     */
    public function setSeq($seq) {
        $this->seq = $seq;

        return $this;
    }

    /**
     * Get seq
     *
     * @return string 
     */
    public function getSeq() {
        return $this->seq;
    }

    /**
     * Set iconClass
     *
     * @param string $iconClass
     * @return RightSidebarAdvertItem
     */
    public function setIconClass($iconClass) {
        $this->iconClass = $iconClass;

        return $this;
    }

    /**
     * Get iconClass
     *
     * @return string 
     */
    public function getIconClass() {
        return $this->iconClass;
    }

    /**
     * Set images
     *
     * @param string $images
     * @return RightSidebarAdvertItem
     */
    public function setImages($images) {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string 
     */
    public function getImages() {
        return $this->images;
    }

}
