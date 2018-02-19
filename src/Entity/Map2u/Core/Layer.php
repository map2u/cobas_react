<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreLayer
 *
 * @ORM\Table(name="map2u_core__layer", indexes={@ORM\Index(name="idx_3f7556db455fbf7e", columns={"layercategory_uuid"}), @ORM\Index(name="idx_3f7556dbabfe1c6f", columns={"user_uuid"}), @ORM\Index(name="idx_3f7556db5ae42ae1", columns={"category_uuid"}), @ORM\Index(name="idx_3f7556db262639a6", columns={"spatialfile_uuid"})})
 * @ORM\Entity
 */
class Layer {

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
     * @ORM\Column(name="table_uuid", type="guid", nullable=true)
     */
    private $tableUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=150, nullable=true)
     */
    private $tableName;

    /**
     * @var guid
     *
     * @ORM\Column(name="row_uuid", type="guid", nullable=true)
     */
    private $rowUuid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shared", type="boolean", nullable=true)
     */
    private $shared;

    /**
     * @var string
     *
     * @ORM\Column(name="layer_property", type="text", nullable=true)
     */
    private $layerProperty;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_label", type="boolean", nullable=true)
     */
    private $showLabel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="default_show_on_map", type="boolean", nullable=true)
     */
    private $defaultShowOnMap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="layer_show_in_switcher", type="boolean", nullable=true)
     */
    private $layerShowInSwitcher;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoom_level", type="integer", nullable=true)
     */
    private $zoomLevel;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=true)
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float", precision=10, scale=0, nullable=true)
     */
    private $lng;

    /**
     * @var guid
     *
     * @ORM\Column(name="project_uuid", type="guid", nullable=true)
     */
    private $projectUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="layer_type", type="string", length=50, nullable=true)
     */
    private $layerType;

    /**
     * @var string
     *
     * @ORM\Column(name="value_field", type="string", length=150, nullable=true)
     */
    private $valueField;

    /**
     * @var string
     *
     * @ORM\Column(name="sld_filename", type="string", length=255, nullable=true)
     */
    private $sldFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="sld", type="text", nullable=true)
     */
    private $sld;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="text", nullable=true)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="sqltext", type="text", nullable=true)
     */
    private $sqltext;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=255, nullable=true)
     */
    private $sessionId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_zoom", type="integer", nullable=true)
     */
    private $minZoom;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_zoom", type="integer", nullable=true)
     */
    private $maxZoom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="image_layer", type="boolean", nullable=true)
     */
    private $imageLayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="cache", type="integer", nullable=true)
     */
    private $cache;

    /**
     * @var string
     *
     * @ORM\Column(name="layer_format", type="string", length=50, nullable=true)
     */
    private $layerFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="feature_route", type="string", length=150, nullable=true)
     */
    private $featureRoute;

    /**
     * @var string
     *
     * @ORM\Column(name="name_field", type="string", length=150, nullable=true)
     */
    private $nameField;

    /**
     * @var string
     *
     * @ORM\Column(name="label_field", type="string", length=150, nullable=true)
     */
    private $labelField;

    /**
     * @var \App\Entity\Map2u\Core\Spatialfile
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\Spatialfile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spatialfile_uuid", referencedColumnName="id")
     * })
     */
    private $spatialfileUuid;

    /**
     * @var \App\Entity\Map2u\Core\LayerCategory
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\LayerCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="layercategory_uuid", referencedColumnName="id")
     * })
     */
    private $layercategoryUuid;

    /**
     * @var \App\Entity\Map2u\Core\Category
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_uuid", referencedColumnName="id")
     * })
     */
    private $categoryUuid;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_uuid", referencedColumnName="id")
     * })
     */
    private $userUuid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Map2u\Core\UserGroup", inversedBy="layerUuid")
     * @ORM\JoinTable(name="map2u_core__layers_groups",
     *   joinColumns={
     *     @ORM\JoinColumn(name="layer_uuid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="group_uuid", referencedColumnName="id")
     *   }
     * )
     */
    private $groupUuid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Map2u\Core\Map", inversedBy="layerUuid")
     * @ORM\JoinTable(name="map2u_core__maps_layers",
     *   joinColumns={
     *     @ORM\JoinColumn(name="layer_uuid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="map_uuid", referencedColumnName="id")
     *   }
     * )
     */
    private $mapUuid;

    /**
     * Constructor
     */
    public function __construct() {
        $this->groupUuid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mapUuid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getTableUuid() {
        return $this->tableUuid;
    }

    public function getTableName() {
        return $this->tableName;
    }

    public function getRowUuid() {
        return $this->rowUuid;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getPublic() {
        return $this->public;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getShared() {
        return $this->shared;
    }

    public function getLayerProperty() {
        return $this->layerProperty;
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

    public function getZoomLevel() {
        return $this->zoomLevel;
    }

    public function getLat() {
        return $this->lat;
    }

    public function getLng() {
        return $this->lng;
    }

    public function getProjectUuid() {
        return $this->projectUuid;
    }

    public function getName() {
        return $this->name;
    }

    public function getLayerType() {
        return $this->layerType;
    }

    public function getValueField() {
        return $this->valueField;
    }

    public function getSldFilename() {
        return $this->sldFilename;
    }

    public function getSld() {
        return $this->sld;
    }

    public function getStyle() {
        return $this->style;
    }

    public function getSqltext() {
        return $this->sqltext;
    }

    public function getSessionId() {
        return $this->sessionId;
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

    public function getMinZoom() {
        return $this->minZoom;
    }

    public function getMaxZoom() {
        return $this->maxZoom;
    }

    public function getImageLayer() {
        return $this->imageLayer;
    }

    public function getCache() {
        return $this->cache;
    }

    public function getLayerFormat() {
        return $this->layerFormat;
    }

    public function getFeatureRoute() {
        return $this->featureRoute;
    }

    public function getNameField() {
        return $this->nameField;
    }

    public function getLabelField() {
        return $this->labelField;
    }

    public function getSpatialfileUuid(): \App\Entity\Map2u\Core\Spatialfile {
        return $this->spatialfileUuid;
    }

    public function getLayercategoryUuid(): \App\Entity\Map2u\Core\LayerCategory {
        return $this->layercategoryUuid;
    }

    public function getCategoryUuid(): \App\Entity\Map2u\Core\Category {
        return $this->categoryUuid;
    }

    public function getUserUuid(): \App\Entity\Map2u\Core\User {
        return $this->userUuid;
    }

    public function getGroupUuid(): \Doctrine\Common\Collections\Collection {
        return $this->groupUuid;
    }

    public function getMapUuid(): \Doctrine\Common\Collections\Collection {
        return $this->mapUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setTableUuid(guid $tableUuid) {
        $this->tableUuid = $tableUuid;
    }

    public function setTableName($tableName) {
        $this->tableName = $tableName;
    }

    public function setRowUuid(guid $rowUuid) {
        $this->rowUuid = $rowUuid;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setPublic($public) {
        $this->public = $public;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setShared($shared) {
        $this->shared = $shared;
    }

    public function setLayerProperty($layerProperty) {
        $this->layerProperty = $layerProperty;
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

    public function setZoomLevel($zoomLevel) {
        $this->zoomLevel = $zoomLevel;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function setProjectUuid(guid $projectUuid) {
        $this->projectUuid = $projectUuid;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLayerType($layerType) {
        $this->layerType = $layerType;
    }

    public function setValueField($valueField) {
        $this->valueField = $valueField;
    }

    public function setSldFilename($sldFilename) {
        $this->sldFilename = $sldFilename;
    }

    public function setSld($sld) {
        $this->sld = $sld;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function setSqltext($sqltext) {
        $this->sqltext = $sqltext;
    }

    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
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

    public function setMinZoom($minZoom) {
        $this->minZoom = $minZoom;
    }

    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;
    }

    public function setImageLayer($imageLayer) {
        $this->imageLayer = $imageLayer;
    }

    public function setCache($cache) {
        $this->cache = $cache;
    }

    public function setLayerFormat($layerFormat) {
        $this->layerFormat = $layerFormat;
    }

    public function setFeatureRoute($featureRoute) {
        $this->featureRoute = $featureRoute;
    }

    public function setNameField($nameField) {
        $this->nameField = $nameField;
    }

    public function setLabelField($labelField) {
        $this->labelField = $labelField;
    }

    public function setSpatialfileUuid(\App\Entity\Map2u\Core\Spatialfile $spatialfileUuid) {
        $this->spatialfileUuid = $spatialfileUuid;
    }

    public function setLayercategoryUuid(\App\Entity\Map2u\Core\LayerCategory $layercategoryUuid) {
        $this->layercategoryUuid = $layercategoryUuid;
    }

    public function setCategoryUuid(\App\Entity\Map2u\Core\Category $categoryUuid) {
        $this->categoryUuid = $categoryUuid;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
    }

    public function setGroupUuid(\Doctrine\Common\Collections\Collection $groupUuid) {
        $this->groupUuid = $groupUuid;
    }

    public function setMapUuid(\Doctrine\Common\Collections\Collection $mapUuid) {
        $this->mapUuid = $mapUuid;
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
