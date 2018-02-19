<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapBookmark
 *
 * @ORM\Table(name="map_bookmark", indexes={@ORM\Index(name="idx_b890a43aabfe1c6f", columns={"user_uuid"})})
 * @ORM\Entity
 */
class MapBookmark {

    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoom_level", type="integer", nullable=false)
     */
    private $zoomLevel;

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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="default_bookmark", type="boolean", nullable=true)
     */
    private $defaultBookmark;

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
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="scale_text", type="string", length=255, nullable=true)
     */
    private $scaleText;

    /**
     * @var integer
     *
     * @ORM\Column(name="seq", type="integer", nullable=true)
     */
    private $seq;

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

    public function getName() {
        return $this->name;
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

    public function getDescription() {
        return $this->description;
    }

    public function getDefaultBookmark() {
        return $this->defaultBookmark;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getScaleText() {
        return $this->scaleText;
    }

    public function getSeq() {
        return $this->seq;
    }

    public function getUserUuid(): \App\Entity\Map2u\Core\User {
        return $this->userUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
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

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setDefaultBookmark($defaultBookmark) {
        $this->defaultBookmark = $defaultBookmark;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setScaleText($scaleText) {
        $this->scaleText = $scaleText;
    }

    public function setSeq($seq) {
        $this->seq = $seq;
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
