<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Station
 *
 * @ORM\Table(name="station", indexes={@ORM\Index(name="idx_9f39f8b1a76ed395", columns={"user_id"})})
 * @ORM\Entity
 */
class Station
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
     * @ORM\Column(name="station_name", type="string", length=40, nullable=true)
     */
    private $stationName;

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

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="BirdSpecies", inversedBy="station")
     * @ORM\JoinTable(name="stations_species",
     *   joinColumns={
     *     @ORM\JoinColumn(name="station_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     *   }
     * )
     */
    private $species;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->species = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function getId() {
        return $this->id;
    }

    public function getStationName() {
        return $this->stationName;
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

    public function getUser(): \App\Entity\Map2u\Core\User {
        return $this->user;
    }

    public function getSpecies(): \Doctrine\Common\Collections\Collection {
        return $this->species;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setStationName($stationName) {
        $this->stationName = $stationName;
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

    public function setUser(\App\Entity\Map2u\Core\User $user) {
        $this->user = $user;
    }

    public function setSpecies(\Doctrine\Common\Collections\Collection $species) {
        $this->species = $species;
    }


}
