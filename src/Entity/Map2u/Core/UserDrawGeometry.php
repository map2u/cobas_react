<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userdrawgeometries
 *
 * @ORM\Table(name="userdrawgeometries")
 * @ORM\Entity
 */
class UserDrawGeometry {

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
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="geom_type", type="string", length=250, nullable=true)
     */
    private $geomType;

    /**
     * @var string
     *
     * @ORM\Column(name="radius", type="string", length=250, nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="buffer", type="string", length=250, nullable=true)
     */
    private $buffer;

    /**
     * @var string
     *
     * @ORM\Column(name="marker_icon", type="string", length=250, nullable=true)
     */
    private $markerIcon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_public", type="boolean", nullable=true)
     */
    private $bPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @ORM\Column(name="images", type="string", length=2500, nullable=true)
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=2500, nullable=true)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="audio", type="string", length=2500, nullable=true)
     */
    private $audio;

    /**
     * @var guid
     *
     * @ORM\Column(name="user_uuid", type="guid", nullable=false)
     */
    private $userUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="center", type="string", length=250, nullable=true)
     */
    private $center;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="text", nullable=true)
     */
    private $style;

    /**
     * @var geometry
     *
     * @ORM\Column(name="the_geom", type="geometry", nullable=true)
     */
    private $theGeom;

    public function getId(): guid {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getGeomType() {
        return $this->geomType;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getBuffer() {
        return $this->buffer;
    }

    public function getMarkerIcon() {
        return $this->markerIcon;
    }

    public function getBPublic() {
        return $this->bPublic;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getImages() {
        return $this->images;
    }

    public function getVideo() {
        return $this->video;
    }

    public function getAudio() {
        return $this->audio;
    }

    public function getUserUuid(): guid {
        return $this->userUuid;
    }

    public function getCenter() {
        return $this->center;
    }

    public function getStyle() {
        return $this->style;
    }

    public function getTheGeom(): geometry {
        return $this->theGeom;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setGeomType($geomType) {
        $this->geomType = $geomType;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function setBuffer($buffer) {
        $this->buffer = $buffer;
    }

    public function setMarkerIcon($markerIcon) {
        $this->markerIcon = $markerIcon;
    }

    public function setBPublic($bPublic) {
        $this->bPublic = $bPublic;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setImages($images) {
        $this->images = $images;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

    public function setAudio($audio) {
        $this->audio = $audio;
    }

    public function setUserUuid(guid $userUuid) {
        $this->userUuid = $userUuid;
    }

    public function setCenter($center) {
        $this->center = $center;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function setTheGeom(geometry $theGeom) {
        $this->theGeom = $theGeom;
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
