<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreSymlayers
 *
 * @ORM\Table(name="map2u_core__symlayers", indexes={@ORM\Index(name="idx_9fd96d5e5ae42ae1", columns={"category_uuid"}), @ORM\Index(name="idx_9fd96d5eabfe1c6f", columns={"user_uuid"}), @ORM\Index(name="idx_9fd96d5e54a8bfc", columns={"layer_uuid"}), @ORM\Index(name="idx_9fd96d5e455fbf7e", columns={"layercategory_uuid"})})
 * @ORM\Entity
 */
class SymLayer {

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
     * @ORM\Column(name="seq", type="integer", nullable=true)
     */
    private $seq;

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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultsld_name", type="string", length=255, nullable=true)
     */
    private $defaultsldName;

    /**
     * @var string
     *
     * @ORM\Column(name="label_field", type="string", length=250, nullable=true)
     */
    private $labelField;

    /**
     * @var string
     *
     * @ORM\Column(name="tip_field", type="string", length=250, nullable=true)
     */
    private $tipField;

    /**
     * @var boolean
     *
     * @ORM\Column(name="default_show_on_map", type="boolean", nullable=false)
     */
    private $defaultShowOnMap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;

    /**
     * @var boolean
     *
     * @ORM\Column(name="topojson_only", type="boolean", nullable=true)
     */
    private $topojsonOnly;

    /**
     * @var string
     *
     * @ORM\Column(name="content_fields", type="text", nullable=true)
     */
    private $contentFields;

    /**
     * @var boolean
     *
     * @ORM\Column(name="layer_showinswitcher", type="boolean", nullable=true)
     */
    private $layerShowinswitcher;

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
     * @var \App\Entity\Map2u\Core\Layer
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\Layer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="layer_uuid", referencedColumnName="id")
     * })
     */
    private $layerUuid;

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

    public function getId(): guid {
        return $this->id;
    }

    public function getSeq() {
        return $this->seq;
    }

    public function getMinZoom() {
        return $this->minZoom;
    }

    public function getMaxZoom() {
        return $this->maxZoom;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getName() {
        return $this->name;
    }

    public function getDefaultsldName() {
        return $this->defaultsldName;
    }

    public function getLabelField() {
        return $this->labelField;
    }

    public function getTipField() {
        return $this->tipField;
    }

    public function getDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    public function getPublished() {
        return $this->published;
    }

    public function getPublic() {
        return $this->public;
    }

    public function getTopojsonOnly() {
        return $this->topojsonOnly;
    }

    public function getContentFields() {
        return $this->contentFields;
    }

    public function getLayerShowinswitcher() {
        return $this->layerShowinswitcher;
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

    public function getLayerUuid(): \App\Entity\Map2u\Core\Layer {
        return $this->layerUuid;
    }

    public function getCategoryUuid(): \App\Entity\Map2u\Core\Category {
        return $this->categoryUuid;
    }

    public function getUserUuid(): \App\Entity\Map2u\Core\User {
        return $this->userUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setSeq($seq) {
        $this->seq = $seq;
    }

    public function setMinZoom($minZoom) {
        $this->minZoom = $minZoom;
    }

    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDefaultsldName($defaultsldName) {
        $this->defaultsldName = $defaultsldName;
    }

    public function setLabelField($labelField) {
        $this->labelField = $labelField;
    }

    public function setTipField($tipField) {
        $this->tipField = $tipField;
    }

    public function setDefaultShowOnMap($defaultShowOnMap) {
        $this->defaultShowOnMap = $defaultShowOnMap;
    }

    public function setPublished($published) {
        $this->published = $published;
    }

    public function setPublic($public) {
        $this->public = $public;
    }

    public function setTopojsonOnly($topojsonOnly) {
        $this->topojsonOnly = $topojsonOnly;
    }

    public function setContentFields($contentFields) {
        $this->contentFields = $contentFields;
    }

    public function setLayerShowinswitcher($layerShowinswitcher) {
        $this->layerShowinswitcher = $layerShowinswitcher;
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

    public function setLayerUuid(\App\Entity\Map2u\Core\Layer $layerUuid) {
        $this->layerUuid = $layerUuid;
    }

    public function setCategoryUuid(\App\Entity\Map2u\Core\Category $categoryUuid) {
        $this->categoryUuid = $categoryUuid;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
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
