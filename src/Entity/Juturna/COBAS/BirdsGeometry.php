<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdsGeometry
 *
 * @ORM\Table(name="birds_geometry", indexes={@ORM\Index(name="idx_5df779da21bdb235", columns={"station_id"}), @ORM\Index(name="idx_5df779dac35e566a", columns={"family_id"})})
 * @ORM\Entity
 */
class BirdsGeometry
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=25, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="geometry_type", type="string", length=255, nullable=true)
     */
    private $geometryType;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="radius", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var geometry
     *
     * @ORM\Column(name="the_geom", type="geometry", nullable=true)
     */
    private $theGeom;

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
     * @var \Station
     *
     * @ORM\ManyToOne(targetEntity="Station")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="station_id", referencedColumnName="id")
     * })
     */
    private $station;

    /**
     * @var \BirdFamily
     *
     * @ORM\ManyToOne(targetEntity="BirdFamily")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="family_id", referencedColumnName="id")
     * })
     */
    private $family;

    public function getId() {
        return $this->id;
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

    public function getLng() {
        return $this->lng;
    }

    public function getLat() {
        return $this->lat;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getTheGeom(): geometry {
        return $this->theGeom;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getStation(): \Station {
        return $this->station;
    }

    public function getFamily(): \BirdFamily {
        return $this->family;
    }

    public function setId($id) {
        $this->id = $id;
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

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function setTheGeom(geometry $theGeom) {
        $this->theGeom = $theGeom;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setStation(\Station $station) {
        $this->station = $station;
    }

    public function setFamily(\BirdFamily $family) {
        $this->family = $family;
    }


}
