<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logo
 */
class Logo {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $imagename;

    /**
     * @var string
     */
    private $imageFilename;

    /**
     * @var string
     */
    private $imagePath;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $websiteUrl;

    /**
     * @var string
     */
    private $imageTip;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var integer
     */
    private $showSeq;

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
     * Set id
     * @param integer $id
     * @return Logo
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set imagename
     *
     * @param string $imagename
     * @return Logo
     */
    public function setImagename($imagename) {
        $this->imagename = $imagename;

        return $this;
    }

    /**
     * Get imagename
     *
     * @return string
     */
    public function getImagename() {
        return $this->imagename;
    }

    /**
     * Set imageFilename
     *
     * @param string $imageFilename
     * @return Logo
     */
    public function setImageFilename($imageFilename) {
        $this->imageFilename = $imageFilename;

        return $this;
    }

    /**
     * Get imageFilename
     *
     * @return string
     */
    public function getImageFilename() {
        return $this->imageFilename;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     * @return Logo
     */
    public function setImagePath($imagePath) {
        $this->imagePath = $imagePath;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string
     */
    public function getImagePath() {
        return $this->imagePath;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Logo
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
     * Set websiteUrl
     *
     * @param string $websiteUrl
     * @return Logo
     */
    public function setWebsiteUrl($websiteUrl) {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    /**
     * Get websiteUrl
     *
     * @return string
     */
    public function getWebsiteUrl() {
        return $this->websiteUrl;
    }

    /**
     * Set imageTip
     *
     * @param string $imageTip
     * @return Logo
     */
    public function setImageTip($imageTip) {
        $this->imageTip = $imageTip;

        return $this;
    }

    /**
     * Get imageTip
     *
     * @return string
     */
    public function getImageTip() {
        return $this->imageTip;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Logo
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function isEnabled() {
        return $this->enabled;
    }

    /**
     * Set showSeq
     *
     * @param integer $showSeq
     * @return Logo
     */
    public function setShowSeq($showSeq) {
        $this->showSeq = $showSeq;

        return $this;
    }

    /**
     * Get showSeq
     *
     * @return integer
     */
    public function getShowSeq() {
        return $this->showSeq;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Logo
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
     * @return Logo
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
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
