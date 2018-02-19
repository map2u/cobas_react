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
use Map2u\CoreBundle\Model\GroupLayerInterface;

abstract class GroupLayer implements GroupLayerInterface {

    protected $id;
    protected $userId;
    protected $user;
    protected $tableId;
    protected $tableName;
    protected $rowId;
    protected $category;
    protected $layerCategory;
    protected $categoryId;
    protected $layerCategoryId;
    protected $spatialfile;
    protected $projectId;
    protected $locale = 'en';
    protected $name;
    protected $sld;
    protected $enabled;
    protected $layerType; // 1 thematic map, 2 heatmap, 3
    protected $shared;
    protected $properties;
    protected $valueField;
    protected $public;
    protected $position;
    protected $topojson;
    protected $style;
    protected $showLabel;
    protected $defaultShowOnMap;
    protected $layerShowInSwitcher;
    protected $createdAt;
    protected $updatedAt;
    protected $description;
    protected $layergeoms;
    protected $sldFileName;
    protected $maps;
    protected $groups;
    protected $zoomLevel;
    protected $maxZoom;
    protected $minZoom;
    
    protected $lat;
    protected $lng;
    protected $layerProperty;
    protected $sqltext;
    protected $sessionId;

    public function __construct() {

        $this->layergeoms = new ArrayCollection();
        $this->maps = new ArrayCollection();
        $this->groups = new ArrayCollection();
        $this->projects = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
  /**
     * {@inheritdoc}
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * {@inheritdoc}
     */
    public function setStyle($style) {
        $this->style = $style;
        return $this;
    }
    /**
     * {@inheritdoc}
     */
    public function setTableId($tableId) {
        $this->tableId = $tableId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTableId() {
        return $this->tableId;
    }

    /**
     * {@inheritdoc}
     */
    public function setTableName($tableName) {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTableName() {
        return $this->tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function setRowId($rowId) {
        $this->rowId = $rowId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRowId() {
        return $this->rowId;
    }

    /**
     * {@inheritdoc}
     */
    public function setSldFileName($sldFileName) {
        $this->sldFileName = $sldFileName;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSldFileName() {
        return $this->sldFileName;
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * {@inheritdoc}
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }
   /**
     * {@inheritdoc}
     */
    public function setMinZoom($minZoom) {
        $this->minZoom = $minZoom;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMinZoom() {
        return $this->minZoom;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;

        return $this;
    }

   /**
     * {@inheritdoc}
     */
    public function getMaxZoom() {
        return $this->maxZoom;
    }

    /**
     * Set zoomLevel
     *
     * @param integer $zoomLevel
     * @return mixed
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
     * @return mixed
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
     * @return mixed
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
     * {@inheritdoc}
     */
    public function getSqltext() {
        return $this->sqltext;
    }

    /**
     * {@inheritdoc}
     */
    public function setSqltext($sqltext) {
        $this->sqltext = $sqltext;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setValueField($valueField) {
        $this->valueField = $valueField;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getValueField() {

        return $this->valueField;
    }

    /**
     * {@inheritdoc}
     */
    public function setSpatialfile($spatialfile) {
        $this->spatialfile = $spatialfile;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpatialfile() {
        return $this->spatialfile;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerProperty($layerProperty) {
        $this->layerProperty = $layerProperty;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerProperty() {

        return $this->layerProperty;
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionId() {
        return $this->sessionId;
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerType() {
        return $this->layerType;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerType($layerType) {
        $this->layerType = $layerType;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId() {
        $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setShared($shared) {
        $this->shared = $shared;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getShared() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setSld($sld) {
        $this->sld = $sld;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSld() {
        return $this->sld;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled() {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultShowOnMap($defaultShowOnMap) {
        $this->defaultShowOnMap = $defaultShowOnMap;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultShowOnMap() {
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
     * {@inheritdoc}
     */
    public function isPublic() {
        return $this->public;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublic() {
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
     * {@inheritdoc}
     */
    public function isLayerShowInSwitcher() {
        return $this->layerShowInSwitcher;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerShowInSwitcher() {
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
     * {@inheritdoc}
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
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setTopojson($topojson) {
        $this->topojson = $topojson;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isTopojson() {
        return $this->topojson;
    }

    /**
     * {@inheritdoc}
     */
    public function getTopojson() {
        return $this->topojson;
    }

    /**
     * {@inheritdoc}
     */
    public function setShowLabel($showLabel) {
        $this->showLabel = $showLabel;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isShowLabel() {
        return $this->showLabel;
    }

    /**
     * {@inheritdoc}
     */
    public function getShowLabel() {
        return $this->showLabel;
    }

    /**
     * {@inheritdoc}
     */
    public function addLayerGeom(\Map2u\CoreBundle\Entity\LayerGeom $layergeom = null) {
        $this->layergeoms[] = $layergeom;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeLayerGeom(\Map2u\CoreBundle\Entity\LayerGeom $layergeom = null) {
        $this->layergeoms->removeElement($layergeom);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerGeoms() {
        return $this->layergeoms;
    }

    /**
     * {@inheritdoc}
     */
    public function addMap(\Map2u\CoreBundle\Entity\Map $map = null) {
        $this->maps[] = $map;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeMap(\Map2u\CoreBundle\Entity\Map $map = null) {
        $this->maps->removeElement($map);
    }

    /**
     * {@inheritdoc}
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryId() {
        return $this->categoryId;
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
        return $this->layerCategory;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerCategoryId($layerCategoryId) {
        $this->layerCategoryId = $layerCategoryId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerCategoryId() {
        return $this->layerCategoryId;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaps() {
        return $this->maps;
    }

    public function __toString() {
        return $this->name;
    }

    public function prePersist() {
        $this->setCreatedAt(new \DateTime);
        $this->setUpdatedAt(new \DateTime);
    }

    public function preUpdate() {
        $this->setUpdatedAt(new \DateTime);
    }

    public function getLocale() {

        return $this->locale = locale_get_default();
    }

}
