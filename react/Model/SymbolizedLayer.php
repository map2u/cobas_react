<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Sonata Project <https://github.com/sonata-project/SonataClassificationBundle/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Map2u\CoreBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Map2u\CoreBundle\Model\SymbolizedLayerInterface;

abstract class SymbolizedLayer implements SymbolizedLayerInterface {

    /**
     * @var guid
     */
    protected $id;

    /**
     * @var guid
     */
    protected $userId;

    /**
     * @var integer
     */
    protected $seq;

    /**
     * @var integer
     */
    protected $minZoom;

    /**
     * @var integer
     */
    protected $maxZoom;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $defaultSldName;

    /**
     * @var boolean
     */
    protected $published;

    /**
     * @var string
     */
    protected $labelField;

    /**
     * @var string
     */
    protected $tipField;

    /**
     * @var boolean
     */
    protected $public;

    /**
     * @var string
     */
    protected $defaultShowOnMap;

    /**
     * @var boolean
     */
    protected $layerShowInSwitcher;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Map2u\CoreBundle\Entity\SpatialFile
     */
    protected $spatialfile;

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param guid $id
     * @return mixed
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set userId
     *
     * @param guid $userId
     * @return mixed
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return guid 
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Set seq
     *
     * @param integer $seq
     * @return mixed
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
     * Set minZoom
     *
     * @param integer $minZoom
     * @return mixed
     */
    public function setMinZoom($minZoom) {
        $this->minZoom = $minZoom;

        return $this;
    }

    /**
     * Get minZoom
     *
     * @return integer 
     */
    public function getMinZoom() {
        return $this->minZoom;
    }

    /**
     * Set seq
     *
     * @param integer $maxZoom
     * @return mixed
     */
    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;

        return $this;
    }

    /**
     * Get maxZoom
     *
     * @return integer 
     */
    public function getMaxZoom() {
        return $this->maxZoom;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return mixed
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set labelField
     *
     * @param string $labelField
     * @return mixed
     */
    public function setLabelField($labelField) {
        $this->labelField = $labelField;

        return $this;
    }

    /**
     * Get labelField
     *
     * @return string 
     */
    public function getLabelField() {
        return $this->labelField;
    }

    /**
     * Set tipField
     *
     * @param string $tipField
     * @return mixed
     */
    public function setTipField($tipField) {
        $this->tipField = $tipField;

        return $this;
    }

    /**
     * Get tipField
     *
     * @return string 
     */
    public function getTipField() {
        return $this->tipField;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
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
     * Set defaultSldName
     *
     * @param string $defaultSldName
     * @return mixed
     */
    public function setDefaultSldName($defaultSldName) {
        $this->defaultSldName = $defaultSldName;

        return $this;
    }

    /**
     * Get defaultSldName
     *
     * @return string 
     */
    public function getDefaultSldName() {
        return $this->defaultSldName;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return mixed
     */
    public function setPublished($published) {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function isPublished() {
        return $this->published;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultShowOnMap($defaultShowOnMap) {
        $this->defaultShowOnMap = $defaultShowOnMap;

        return $this;
    }

    /**
     * Get defaultShowOnMap
     *
     * @return string 
     */
    public function isDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    /**
     * {@inheritdoc}
     */
    public function setPublic($public) {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function isPublic() {
        return $this->public;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerShowInSwitcher($layerShowInSwitcher) {
        $this->layerShowInSwitcher = $layerShowInSwitcher;

        return $this;
    }

    /**
     * Get layerShowInSwitcher
     *
     * @return boolean 
     */
    public function isLayerShowInSwitcher() {
        return $this->layerShowInSwitcher;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt) {
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
     * {@inheritdoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt) {
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
     * {@inheritdoc}
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
     * @var boolean
     */
    protected $topojsonOnly;

    /**
     * {@inheritdoc}
     */
    public function setTopojsonOnly($topojsonOnly) {
        $this->topojsonOnly = $topojsonOnly;

        return $this;
    }

    /**
     * Get topojsonOnly
     *
     * @return boolean 
     */
    public function isTopojsonOnly() {
        return $this->topojsonOnly;
    }

    /**
     * @var string
     */
    protected $contentFields;

    /**
     * Get defaultShowOnMap
     *
     * @return boolean 
     */
    public function getDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished() {
        return $this->published;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic() {
        return $this->public;
    }

    /**
     * Get topojsonOnly
     *
     * @return boolean 
     */
    public function getTopojsonOnly() {
        return $this->topojsonOnly;
    }

    /**
     * {@inheritdoc}
     */
    public function setContentFields($contentFields) {
        $this->contentFields = $contentFields;

        return $this;
    }

    /**
     * Get contentFields
     *
     * @return string 
     */
    public function getContentFields() {
        return $this->contentFields;
    }

    /**
     * Get layerShowInSwitcher
     *
     * @return boolean 
     */
    public function getLayerShowInSwitcher() {
        return $this->layerShowInSwitcher;
    }

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    protected $user;

    /**
     * {@inheritdoc}
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

    /**
     * @var \Map2u\CoreBundle\Entity\BaseCategory
     */
    protected $category;

    /**
     * {@inheritdoc}
     */
    public function setCategory(\Map2u\CoreBundle\Entity\Category $category = null) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Map2u\CoreBundle\Entity\Category 
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerCategory($layerCategory) {
        $this->layerCategory = $layerCategory;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerCategory() {
        $this->layerCategory;
    }

    public function prePersist() {
        
    }

    public function preUpdate() {
        
    }

    public function __toString() {
        return $this->name;
    }

}
