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

interface SymbolizedLayerInterface {

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId();

    /**
     * Set id
     *
     * @param guid $id
     * @return mixed
     */
    public function setId($id);

    /**
     * Set userId
     *
     * @param guid $userId
     * @return mixed
     */
    public function setUserId($userId);

    /**
     * Get userId
     *
     * @return guid 
     */
    public function getUserId();

    /**
     * Set seq
     *
     * @param integer $seq
     * @return mixed
     */
    public function setSeq($seq);

    /**
     * Get seq
     *
     * @return integer 
     */
    public function getSeq();

    /**
     * Set minZoom
     *
     * @param integer $minZoom
     * @return mixed
     */
    public function setMinZoom($minZoom);

    /**
     * Get minZoom
     *
     * @return integer 
     */
    public function getMinZoom();

    /**
     * Set seq
     *
     * @param integer $maxZoom
     * @return mixed
     */
    public function setMaxZoom($maxZoom);

    /**
     * Get maxZoom
     *
     * @return integer 
     */
    public function getMaxZoom();

    /**
     * Set layerTitle
     *
     * @param string $title
     * @return mixed
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle();

    /**
     * Set labelField
     *
     * @param string $labelField
     * @return mixed
     */
    public function setLabelField($labelField);

    /**
     * Get labelField
     *
     * @return string 
     */
    public function getLabelField();

    /**
     * Set tipField
     *
     * @param string $tipField
     * @return mixed
     */
    public function setTipField($tipField);

    /**
     * Get tipField
     *
     * @return string 
     */
    public function getTipField();

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Set defaultSldName
     *
     * @param string $defaultSldName
     * @return mixed
     */
    public function setDefaultSldName($defaultSldName);

    /**
     * Get defaultSldName
     *
     * @return string 
     */
    public function getDefaultSldName();

    /**
     * Set published
     *
     * @param boolean $published
     * @return mixed
     */
    public function setPublished($published);

    /**
     * Get published
     *
     * @return boolean 
     */
    public function isPublished();

    /**
     * Set defaultShowOnMap
     *
     * @param string $defaultShowOnMap
     * @return mixed
     */
    public function setDefaultShowOnMap($defaultShowOnMap);

    /**
     * Get defaultShowOnMap
     *
     * @return string 
     */
    public function isDefaultShowOnMap();

    /**
     * Set public
     *
     * @param boolean $public
     * @return mixed
     */
    public function setPublic($public);

    /**
     * Get public
     *
     * @return boolean 
     */
    public function isPublic();

    /**
     * Set layerShowInSwitcher
     *
     * @param boolean $layerShowInSwitcher
     * @return mixed
     */
    public function setLayerShowInSwitcher($layerShowInSwitcher);

    /**
     * Get layerShowInSwitcher
     *
     * @return boolean 
     */
    public function isLayerShowInSwitcher();

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return mixed
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt();

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return mixed
     */
    public function setUpdatedAt(\DateTime $updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt();

    /**
     * Set description
     *
     * @param string $description
     * @return mixed
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * Set topojsonOnly
     *
     * @param boolean $topojsonOnly
     * @return mixed
     */
    public function setTopojsonOnly($topojsonOnly);

    /**
     * Get topojsonOnly
     *
     * @return boolean 
     */
    public function isTopojsonOnly();

    /**
     * Get defaultShowOnMap
     *
     * @return boolean 
     */
    public function getDefaultShowOnMap();

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished();

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic();

    /**
     * Get topojsonOnly
     *
     * @return boolean 
     */
    public function getTopojsonOnly();

    /**
     * Set contentFields
     *
     * @param string $contentFields
     * @return mixed
     */
    public function setContentFields($contentFields);

    /**
     * Get contentFields
     *
     * @return string 
     */
    public function getContentFields();

    /**
     * Get layerShowInSwitcher
     *
     * @return boolean 
     */
    public function getLayerShowInSwitcher();

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return mixed
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null);

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser();

    /**
     * Set category
     *
     * @param \Map2u\CoreBundle\Entity\Category $category
     * @return mixed
     */
    public function setCategory(\Map2u\CoreBundle\Entity\Category $category = null);

    /**
     * Get category
     *
     * @return \Map2u\CoreBundle\Entity\Category 
     */
    public function getCategory();

    /**
     * Set layerCategory
     *
     * @param \Map2u\CoreBundle\Entity\LayerCategory layerCategory
     * @return mixed
     */
    public function setLayerCategory($layerCategory);

    /**
     * Get layerCategory
     *
     * @return \Map2u\CoreBundle\Entity\LayerCategory
     */
    public function getLayerCategory();

    /**
     * Get layerCategory
     *
     * @return string
     */
    public function __toString();
}
