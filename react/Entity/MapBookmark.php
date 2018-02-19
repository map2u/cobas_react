<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapBookmark
 */
class MapBookmark {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $scaleText;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $seq;

    /**
     * @var integer
     */
    private $zoomLevel;

    /**
     * @var float
     */
    private $lat;

    /**
     * @var float
     */
    private $lng;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $default;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MapBookmark
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
     * Set scaleText
     *
     * @param string $scaleText
     * @return MapBookmark
     */
    public function setScaleText($scaleText) {
        $this->scaleText = $scaleText;

        return $this;
    }

    /**
     * Get scaleText
     *
     * @return string 
     */
    public function getScaleText() {
        return $this->scaleText;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return MapBookmark
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return MapBookmark
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Set seq
     *
     * @param integer $seq
     * @return MapBookmark
     */
    public function setSeq($seq) {
        $this->seq = $seq;

        return $this;
    }

    /**
     * Get seq
     *
     * @return integer 
     */
    public function getSeq() {
        return $this->seq;
    }

    /**
     * Set zoomLevel
     *
     * @param integer $zoomLevel
     * @return MapBookmark
     */
    public function setZoomLevel($zoomLevel) {
        $this->zoomLevel = $zoomLevel;

        return $this;
    }

    /**
     * Get zoomLevel
     *
     * @return integer 
     */
    public function getZoomLevel() {
        return $this->zoomLevel;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return MapBookmark
     */
    public function setLat($lat) {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat() {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     * @return MapBookmark
     */
    public function setLng($lng) {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float 
     */
    public function getLng() {
        return $this->lng;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MapBookmark
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set default
     *
     * @param boolean $default
     * @return MapBookmark
     */
    public function setDefault($default) {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return boolean 
     */
    public function getDefault() {
        return $this->default;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return MapBookmark
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return MapBookmark
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
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return MapBookmark
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }

}
