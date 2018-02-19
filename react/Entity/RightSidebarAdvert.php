<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * RightSidebarAdvert
 */
class RightSidebarAdvert {

    use ORMBehaviors\Translatable\Translatable;

    /**
     * @var guid
     */
    protected $id;

   

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
     * @var \Map2u\CoreBundle\Entity\SidebarMenu
     */
    private $routing;

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
     * @return RightSidebarAdvert
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
     * @return RightSidebarAdvert
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
     * @return RightSidebarAdvert
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
     * @return RightSidebarAdvert
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

    /**
     * Set routing
     *
     * @param \Map2u\CoreBundle\Entity\SidebarMenu $routing
     * @return RightSidebarAdvert
     */
    public function setRouting(\Map2u\CoreBundle\Entity\SidebarMenu $routing = null) {
        $this->routing = $routing;

        return $this;
    }

    /**
     * Get routing
     *
     * @return \Map2u\CoreBundle\Entity\SidebarMenu 
     */
    public function getRouting() {
        return $this->routing;
    }

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $bidingPrice;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $expiredAt;

    /**
     * @var \Map2u\CoreBundle\Entity\RightSidebarAdvertItem
     */
    private $aditem;

    /**
     * Set price
     *
     * @param float $price
     * @return RightSidebarAdvert
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set bidingPrice
     *
     * @param float $bidingPrice
     * @return RightSidebarAdvert
     */
    public function setBidingPrice($bidingPrice) {
        $this->bidingPrice = $bidingPrice;

        return $this;
    }

    /**
     * Get bidingPrice
     *
     * @return float 
     */
    public function getBidingPrice() {
        return $this->bidingPrice;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return RightSidebarAdvert
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     * @return RightSidebarAdvert
     */
    public function setExpiredAt($expiredAt) {
        $this->expiredAt = $expiredAt;

        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime 
     */
    public function getExpiredAt() {
        return $this->expiredAt;
    }

    /**
     * Set aditem
     *
     * @param \Map2u\CoreBundle\Entity\RightSidebarAdvertItem $aditem
     * @return RightSidebarAdvert
     */
    public function setAditem(\Map2u\CoreBundle\Entity\RightSidebarAdvertItem $aditem = null) {
        $this->aditem = $aditem;

        return $this;
    }

    /**
     * Get aditem
     *
     * @return \Map2u\CoreBundle\Entity\RightSidebarAdvertItem 
     */
    public function getAditem() {
        return $this->aditem;
    }

}
