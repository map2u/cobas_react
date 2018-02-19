<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maplayer
 *
 * @ORM\Table(name="maplayer")
 * @ORM\Entity
 */
class Maplayer {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="map_title", type="string", length=255, nullable=false)
     */
    private $mapTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="map_name", type="string", length=255, nullable=false)
     */
    private $mapName;

    /**
     * @var string
     *
     * @ORM\Column(name="map_url", type="string", length=255, nullable=false)
     */
    private $mapUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="map_workspace", type="string", length=255, nullable=false)
     */
    private $mapWorkspace;

    /**
     * @var string
     *
     * @ORM\Column(name="map_type", type="string", length=40, nullable=true)
     */
    private $mapType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="map_enabled", type="boolean", nullable=true)
     */
    private $mapEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="map_showinswitcher", type="boolean", nullable=true)
     */
    private $mapShowinswitcher;

    /**
     * @var string
     *
     * @ORM\Column(name="map_epsg", type="string", length=40, nullable=true)
     */
    private $mapEpsg;

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

    public function getId() {
        return $this->id;
    }

    public function getMapTitle() {
        return $this->mapTitle;
    }

    public function getMapName() {
        return $this->mapName;
    }

    public function getMapUrl() {
        return $this->mapUrl;
    }

    public function getMapWorkspace() {
        return $this->mapWorkspace;
    }

    public function getMapType() {
        return $this->mapType;
    }

    public function getMapEnabled() {
        return $this->mapEnabled;
    }

    public function getMapShowinswitcher() {
        return $this->mapShowinswitcher;
    }

    public function getMapEpsg() {
        return $this->mapEpsg;
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

    public function setId($id) {
        $this->id = $id;
    }

    public function setMapTitle($mapTitle) {
        $this->mapTitle = $mapTitle;
    }

    public function setMapName($mapName) {
        $this->mapName = $mapName;
    }

    public function setMapUrl($mapUrl) {
        $this->mapUrl = $mapUrl;
    }

    public function setMapWorkspace($mapWorkspace) {
        $this->mapWorkspace = $mapWorkspace;
    }

    public function setMapType($mapType) {
        $this->mapType = $mapType;
    }

    public function setMapEnabled($mapEnabled) {
        $this->mapEnabled = $mapEnabled;
    }

    public function setMapShowinswitcher($mapShowinswitcher) {
        $this->mapShowinswitcher = $mapShowinswitcher;
    }

    public function setMapEpsg($mapEpsg) {
        $this->mapEpsg = $mapEpsg;
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
