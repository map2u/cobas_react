<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreUsergeometry
 *
 * @ORM\Table(name="map2u_core_usergeometry")
 * @ORM\Entity
 */
class UserGeometry {

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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="marker_icon", type="string", length=255, nullable=false)
     */
    private $markerIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="geom_type", type="string", length=255, nullable=false)
     */
    private $geomType;

    /**
     * @var float
     *
     * @ORM\Column(name="buffer", type="float", precision=10, scale=0, nullable=false)
     */
    private $buffer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=false)
     */
    private $public;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

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
     * @ORM\Column(name="style", type="string", length=255, nullable=false)
     */
    private $style;

    /**
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=false)
     */
    private $radius;

    public function getId(): guid {
        return $this->id;
    }

    public function getUserId(): guid {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function getMarkerIcon() {
        return $this->markerIcon;
    }

    public function getGeomType() {
        return $this->geomType;
    }

    public function getBuffer() {
        return $this->buffer;
    }

    public function getPublic() {
        return $this->public;
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

    public function getStyle() {
        return $this->style;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setUserId(guid $userId) {
        $this->userId = $userId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setMarkerIcon($markerIcon) {
        $this->markerIcon = $markerIcon;
    }

    public function setGeomType($geomType) {
        $this->geomType = $geomType;
    }

    public function setBuffer($buffer) {
        $this->buffer = $buffer;
    }

    public function setPublic($public) {
        $this->public = $public;
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

    public function setStyle($style) {
        $this->style = $style;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
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
