<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreMap
 *
 * @ORM\Table(name="map2u_core__map", indexes={@ORM\Index(name="idx_f797c9e6abfe1c6f", columns={"user_uuid"}), @ORM\Index(name="idx_f797c9e65ae42ae1", columns={"category_uuid"}), @ORM\Index(name="idx_f797c9e6455fbf7e", columns={"layercategory_uuid"})})
 * @ORM\Entity
 */
class Map {

    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoom_level", type="integer", nullable=true)
     */
    private $zoomLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="map_title", type="string", length=250, nullable=false)
     */
    private $mapTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var json
     *
     * @ORM\Column(name="layer_seq", type="json", nullable=true)
     */
    private $layerSeq;

    /**
     * @var string
     *
     * @ORM\Column(name="title_position", type="string", length=250, nullable=true)
     */
    private $titlePosition;

    /**
     * @var string
     *
     * @ORM\Column(name="map_center", type="string", length=250, nullable=true)
     */
    private $mapCenter;

    /**
     * @var string
     *
     * @ORM\Column(name="title_style", type="string", length=250, nullable=true)
     */
    private $titleStyle;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_scale", type="boolean", nullable=true)
     */
    private $showScale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shared", type="boolean", nullable=true)
     */
    private $shared;

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
     * @ORM\ManyToMany(targetEntity="App\Entity\Map2u\Core\Usergroup", inversedBy="groupUuid")
     * @ORM\JoinTable(name="map2u_core__maps_groups",
     *   joinColumns={
     *     @ORM\JoinColumn(name="group_uuid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="map_uuid", referencedColumnName="id")
     *   }
     * )
     */
    private $mapUuid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Map2u\Core\Layer", mappedBy="mapUuid")
     */
    private $layerUuid;

    /**
     * Constructor
     */
    public function __construct() {
        $this->mapUuid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->layerUuid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): guid {
        return $this->id;
    }

    public function getZoomLevel() {
        return $this->zoomLevel;
    }

    public function getMapTitle() {
        return $this->mapTitle;
    }

    public function getName() {
        return $this->name;
    }

    public function getLayerSeq(): json {
        return $this->layerSeq;
    }

    public function getTitlePosition() {
        return $this->titlePosition;
    }

    public function getMapCenter() {
        return $this->mapCenter;
    }

    public function getTitleStyle() {
        return $this->titleStyle;
    }

    public function getType() {
        return $this->type;
    }

    public function getShowScale() {
        return $this->showScale;
    }

    public function getShared() {
        return $this->shared;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getPublic() {
        return $this->public;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getDescription() {
        return $this->description;
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

    public function getMapUuid(): \Doctrine\Common\Collections\Collection {
        return $this->mapUuid;
    }

    public function getLayerUuid(): \Doctrine\Common\Collections\Collection {
        return $this->layerUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setZoomLevel($zoomLevel) {
        $this->zoomLevel = $zoomLevel;
    }

    public function setMapTitle($mapTitle) {
        $this->mapTitle = $mapTitle;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLayerSeq(json $layerSeq) {
        $this->layerSeq = $layerSeq;
    }

    public function setTitlePosition($titlePosition) {
        $this->titlePosition = $titlePosition;
    }

    public function setMapCenter($mapCenter) {
        $this->mapCenter = $mapCenter;
    }

    public function setTitleStyle($titleStyle) {
        $this->titleStyle = $titleStyle;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setShowScale($showScale) {
        $this->showScale = $showScale;
    }

    public function setShared($shared) {
        $this->shared = $shared;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setPublic($public) {
        $this->public = $public;
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

    public function setLayercategoryUuid(\App\Entity\Map2u\Core\LayerCategory $layercategoryUuid) {
        $this->layercategoryUuid = $layercategoryUuid;
    }

    public function setCategoryUuid(\App\Entity\Map2u\Core\Category $categoryUuid) {
        $this->categoryUuid = $categoryUuid;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
    }

    public function setMapUuid(\Doctrine\Common\Collections\Collection $mapUuid) {
        $this->mapUuid = $mapUuid;
    }

    public function setLayerUuid(\Doctrine\Common\Collections\Collection $layerUuid) {
        $this->layerUuid = $layerUuid;
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
