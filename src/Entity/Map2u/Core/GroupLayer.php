<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreGrouplayer
 *
 * @ORM\Table(name="map2u_core_grouplayer")
 * @ORM\Entity
 */
class GroupLayer {

    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var guid
     *
     * @ORM\Column(name="user_id", type="guid", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=255, nullable=false)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sld", type="string", length=255, nullable=false)
     */
    private $sld;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="layer_type", type="string", length=255, nullable=false)
     */
    private $layerType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shared", type="boolean", nullable=false)
     */
    private $shared;

    /**
     * @var string
     *
     * @ORM\Column(name="properties", type="string", length=255, nullable=false)
     */
    private $properties;

    /**
     * @var string
     *
     * @ORM\Column(name="value_field", type="string", length=255, nullable=false)
     */
    private $valueField;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=false)
     */
    private $public;

    /**
     * @var string
     *
     * @ORM\Column(name="topojson", type="string", length=255, nullable=false)
     */
    private $topojson;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255, nullable=false)
     */
    private $style;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_label", type="boolean", nullable=false)
     */
    private $showLabel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="default_show_on_map", type="boolean", nullable=false)
     */
    private $defaultShowOnMap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="layer_show_in_switcher", type="boolean", nullable=false)
     */
    private $layerShowInSwitcher;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="sld_file_name", type="string", length=255, nullable=false)
     */
    private $sldFileName;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoom_level", type="integer", nullable=false)
     */
    private $zoomLevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_zoom", type="integer", nullable=false)
     */
    private $maxZoom;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_zoom", type="integer", nullable=false)
     */
    private $minZoom;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=false)
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float", precision=10, scale=0, nullable=false)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="layer_property", type="string", length=255, nullable=false)
     */
    private $layerProperty;

    /**
     * @var string
     *
     * @ORM\Column(name="sqltext", type="string", length=255, nullable=false)
     */
    private $sqltext;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=255, nullable=false)
     */
    private $sessionId;

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getTableName() {
        return $this->tableName;
    }

    public function getName() {
        return $this->name;
    }

    public function getSld() {
        return $this->sld;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getLayerType() {
        return $this->layerType;
    }

    public function getShared() {
        return $this->shared;
    }

    public function getProperties() {
        return $this->properties;
    }

    public function getValueField() {
        return $this->valueField;
    }

    public function getPublic() {
        return $this->public;
    }

    public function getTopojson() {
        return $this->topojson;
    }

    public function getStyle() {
        return $this->style;
    }

    public function getShowLabel() {
        return $this->showLabel;
    }

    public function getDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    public function getLayerShowInSwitcher() {
        return $this->layerShowInSwitcher;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getSldFileName() {
        return $this->sldFileName;
    }

    public function getZoomLevel() {
        return $this->zoomLevel;
    }

    public function getMaxZoom() {
        return $this->maxZoom;
    }

    public function getMinZoom() {
        return $this->minZoom;
    }

    public function getLat() {
        return $this->lat;
    }

    public function getLng() {
        return $this->lng;
    }

    public function getLayerProperty() {
        return $this->layerProperty;
    }

    public function getSqltext() {
        return $this->sqltext;
    }

    public function getSessionId() {
        return $this->sessionId;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setUserId(guid $userId) {
        $this->userId = $userId;
    }

    public function setTableName($tableName) {
        $this->tableName = $tableName;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSld($sld) {
        $this->sld = $sld;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setLayerType($layerType) {
        $this->layerType = $layerType;
    }

    public function setShared($shared) {
        $this->shared = $shared;
    }

    public function setProperties($properties) {
        $this->properties = $properties;
    }

    public function setValueField($valueField) {
        $this->valueField = $valueField;
    }

    public function setPublic($public) {
        $this->public = $public;
    }

    public function setTopojson($topojson) {
        $this->topojson = $topojson;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function setShowLabel($showLabel) {
        $this->showLabel = $showLabel;
    }

    public function setDefaultShowOnMap($defaultShowOnMap) {
        $this->defaultShowOnMap = $defaultShowOnMap;
    }

    public function setLayerShowInSwitcher($layerShowInSwitcher) {
        $this->layerShowInSwitcher = $layerShowInSwitcher;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setSldFileName($sldFileName) {
        $this->sldFileName = $sldFileName;
    }

    public function setZoomLevel($zoomLevel) {
        $this->zoomLevel = $zoomLevel;
    }

    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;
    }

    public function setMinZoom($minZoom) {
        $this->minZoom = $minZoom;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function setLayerProperty($layerProperty) {
        $this->layerProperty = $layerProperty;
    }

    public function setSqltext($sqltext) {
        $this->sqltext = $sqltext;
    }

    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
    }

    /**
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps() {
        $this->setUpdatedAt(new \DateTime('now'));

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }

}
