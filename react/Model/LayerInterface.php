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

interface LayerInterface {

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
     * Set tableId
     *
     * @param guid $tableId
     * @return mixed
     */
    public function setTableId($tableId);

    /**
     * Get tableId
     *
     * @return guid 
     */
    public function getTableId();

    /**
     * Set rowId
     *
     * @param guid $rowId
     * @return mixed
     */
    public function setRowId($rowId);

    /**
     * Get rowId
     *
     * @return guid 
     */
    public function getRowId();

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition();

    /**
     * Set position
     *
     * @param integer $position
     * @return mixed
     */
    public function setPosition($position);

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
     * Set maxZoom
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
     * Set sldFileName
     *
     * @param string $sldFileName
     * @return mixed
     */
    public function setSldFileName($sldFileName);

    /**
     * Get sldFileName
     *
     * @return string 
     */
    public function getSldFileName();

    /**
     * Set style
     *
     * @param string $style
     * @return mixed
     */
    public function setStyle($style);

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle();

    /**
     * Get layerType
     *
     * @return string 
     */
    public function getLayerType();

    /**
     * Set type
     *
     * @param string $layerType
     * @return mixed
     */
    public function setLayerType($layerType);
    
    
    
       /**
     * Get layerFormat
     *
     * @return string 
     */
    public function getLayerFormat();

    /**
     * Set layerFormat
     *
     * @param string $layerFormat
     * @return mixed
     */
    public function setLayerFormat($layerFormat);
    
    
    
    
    
        
       /**
     * Get cache
     *
     * @return integer 
     */
    public function getCache();

    /**
     * Set cache
     *
     * @param integer $cache
     * @return mixed
     */
    public function setCache($cache);

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
     * Set featureRoute
     *
     * @param string $featureRoute
     * @return mixed
     */
    public function setFeatureRoute($featureRoute);

    /**
     * Get featureRoute
     *
     * @return string 
     */
    public function getFeatureRoute();

    /**
     * Set tableName
     *
     * @param string $tableName
     * @return mixed
     */
    public function setTableName($tableName);

    /**
     * Get tableName
     *
     * @return string 
     */
    public function getTableName();

    /**
     * Set shared
     *
     * @param boolean $shared
     * @return mixed
     */
    public function setShared($shared);

    /**
     * Get shared
     *
     * @return boolean 
     */
    public function getShared();

    /**
     * Set zoomLevel
     *
     * @param integer $zoomLevel
     * @return mixed
     */
    public function setZoomLevel($zoomLevel);

    /**
     * Get zoomLevel
     *
     * @return integer 
     */
    public function getZoomLevel();

    /**
     * Set lat
     *
     * @param float $lat
     * @return mixed
     */
    public function setLat($lat);

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat();

    /**
     * Set lng
     *
     * @param float $lng
     * @return mixed
     */
    public function setLng($lng);

    /**
     * Get lng
     *
     * @return float 
     */
    public function getLng();

//    /**
//     * Set group
//     *
//     * @param \Map2u\CoreBundle\Entity\Group $group
//     * @return mixed
//     */
//    public function setGroup(\Map2u\CoreBundle\Entity\Group $group);
//
//    /**
//     * Get group
//     *
//     * @return \Map2u\CoreBundle\Entity\Group 
//     */
//    public function getGroup();

    /**
     * Set sld
     *
     * @param string $sld
     * @return mixed
     */
    public function setSld($sld);

    /**
     * Get sld
     *
     * @return string 
     */
    public function getSld();

    /**
     * Set layerProperty
     *
     * @param string $layerProperty
     * @return mixed
     */
    public function setLayerProperty($layerProperty);

    /**
     * Get layerProperty
     *
     * @return string 
     */
    public function getLayerProperty();

    /**
     * Set valueField
     *
     * @param string $valueField
     * @return mixed
     */
    public function setValueField($valueField);

    /**
     * Get valueField
     *
     * @return string 
     */
    public function getValueField();





    /* Set labelField
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
     * Set nameField
     *
     * @param string $nameField
     * @return mixed
     */
    public function setNameField($nameField);

    /**
     * Get nameField
     *
     * @return string 
     */
    public function getNameField();

    /**
     * Set sqltext
     *
     * @param string $sqltext
     * @return mixed
     */
    public function setSqltext($sqltext);

    /**
     * Get sqltext
     *
     * @return string 
     */
    public function getSqltext();

    /**
     * Set sessionId
     *
     * @param string $sessionId
     * @return mixed
     */
    public function setSessionId($sessionId);

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return mixed
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function isEnabled();

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled();

    /**
     * Set imageLayer
     *
     * @param boolean $imageLayer
     * @return mixed
     */
    public function setImageLayer($imageLayer);

    /**
     * Get imageLayer
     *
     * @return boolean 
     */
    public function isImageLayer();

    /**
     * Get imageLayer
     *
     * @return boolean 
     */
    public function getImageLayer();

    /**
     * Set defaultShowOnMap
     *
     * @param boolean $defaultShowOnMap
     * @return mixed
     */
    public function setDefaultShowOnMap($defaultShowOnMap);

    /**
     * Get defaultShowOnMap
     *
     * @return boolean 
     */
    public function isDefaultShowOnMap();

    /**
     * Get defaultShowOnMap
     *
     * @return boolean 
     */
    public function getDefaultShowOnMap();

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
     * Get public
     *
     * @return boolean 
     */
    public function getPublic();

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
     * Get layerShowInSwitcher
     *
     * @return boolean 
     */
    public function getLayerShowInSwitcher();

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
     * Set topojson
     *
     * @param boolean $topojson
     * @return mixed
     */
    public function setTopojson($topojson);

    /**
     * Get topojson
     *
     * @return boolean 
     */
    public function isTopojson();

    /**
     * Get topojson
     *
     * @return boolean 
     */
    public function getTopojson();

    /**
     * Set showLabel
     *
     * @param boolean $showLabel
     * @return mixed
     */
    public function setShowLabel($showLabel);

    /**
     * Get showLabel
     *
     * @return boolean 
     */
    public function isShowLabel();

    /**
     * Get showLabel
     *
     * @return boolean 
     */
    public function getShowLabel();

    /**
     * add layergeom
     *
     * @param \Map2u\CoreBundle\Entity\LayerGeom $layergeom
     * @return mixed
     */
    public function addLayerGeom(\Map2u\CoreBundle\Entity\LayerGeom $layergeom = null);

    /**
     * remove layergeom
     *
     * @param \Map2u\CoreBundle\Entity\LayerGeom $layergeom
     * @return mixed
     */
    public function removeLayerGeom(\Map2u\CoreBundle\Entity\LayerGeom $layergeom = null);

    /**
     * Get layergeoms
     *
     * @return  mixed
     */
    public function getLayerGeoms();

    /**
     * add map
     *
     * @param \Map2u\CoreBundle\Entity\Map $map
     * @return mixed
     */
    public function addMap(\Map2u\CoreBundle\Entity\Map $map = null);

    /**
     * remove map
     *
     * @param \Map2u\CoreBundle\Entity\Map $map
     * @return mixed
     */
    public function removeMap(\Map2u\CoreBundle\Entity\Map $map = null);

    /**
     * Get maps
     *
     * @return  mixed
     */
    public function getMaps();

//    /**
//     * add project
//     *
//     * @param \Map2u\CoreBundle\Entity\Project $project
//     * @return mixed
//     */
//    public function addProject(\Map2u\CoreBundle\Entity\Project $project = null);
//
//    /**
//     * remove project
//     *
//     * @param \Map2u\CoreBundle\Entity\Project $project
//     * @return mixed
//     */
//    public function removeProject(\Map2u\CoreBundle\Entity\Project $project = null);

    /**
     * Get projects
     *
     * @return  mixed
     */
    //public function getProjects();

    /**
     * Set category
     *
     * @param \Map2u\CoreBundle\Entity\Category $category
     * @return mixed
     */
    public function setCategory($category);

    /**
     * Get category
     *
     * @return \Map2u\CoreBundle\Entity\Category
     */
    public function getCategory();

    /**
     * Set categoryId
     *
     * @param guid $categoryId
     * @return mixed
     */
    public function setCategoryId($categoryId);

    /**
     * Get categoryId
     *
     * @return guid
     */
    public function getCategoryId();

    /**
     * Set spatialfile
     *
     * @param \Map2u\CoreBundle\Entity\SpatialFile $spatialfile
     * @return mixed
     */
    public function setSpatialfile($spatialfile);

    /**
     * Get spatialfile
     *
     * @return \Map2u\CoreBundle\Entity\SpatialFile
     */
    public function getSpatialfile();

    /**
     * Set layerCategory
     *
     * @param \Map2u\CoreBundle\Entity\LayerCategory $layerCategory
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
     * Set layerCategoryId
     *
     * @param guid $layerCategoryId
     * @return mixed
     */
    public function setLayerCategoryId($layerCategoryId);

    /**
     * Get layerCategoryId
     *
     * @return guid
     */
    public function getLayerCategoryId();
}
