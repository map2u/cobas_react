<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * DamSites
 *
 * @ORM\Table(name="dam_sites", indexes={@ORM\Index(name="dam_sites_user_id_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class DamSites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=140, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=40, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="geometry_type", type="string", length=40, nullable=true)
     */
    private $geometryType;

    /**
     * @var geometry
     *
     * @ORM\Column(name="the_geom", type="geometry", nullable=true)
     */
    private $theGeom;

    /**
     * @var string
     *
     * @ORM\Column(name="radius", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="intersection", type="text", nullable=true)
     */
    private $intersection;

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
     * @var float
     *
     * @ORM\Column(name="lng", type="float", precision=10, scale=0, nullable=true)
     */
    private $lng;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=true)
     */
    private $lat;
    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }

    public function getGeometryType() {
        return $this->geometryType;
    }

    public function getTheGeom(): geometry {
        return $this->theGeom;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getIntersection() {
        return $this->intersection;
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

    public function getLng() {
        return $this->lng;
    }

    public function getLat() {
        return $this->lat;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setGeometryType($geometryType) {
        $this->geometryType = $geometryType;
    }

    public function setTheGeom(geometry $theGeom) {
        $this->theGeom = $theGeom;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function setIntersection($intersection) {
        $this->intersection = $intersection;
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

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }



}
