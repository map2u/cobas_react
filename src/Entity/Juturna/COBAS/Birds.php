<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Birds
 *
 * @ORM\Table(name="birds", indexes={@ORM\Index(name="idx_fc1659a2c35e566a", columns={"family_id"}), @ORM\Index(name="idx_fc1659a221bdb235", columns={"station_id"}), @ORM\Index(name="idx_fc1659a2a76ed395", columns={"user_id"})})
 * @ORM\Entity
 */
class Birds
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
     * @ORM\Column(name="scientific_name", type="string", length=255, nullable=false)
     */
    private $scientificName;

    /**
     * @var string
     *
     * @ORM\Column(name="common_name", type="string", length=255, nullable=true)
     */
    private $commonName;

    /**
     * @var string
     *
     * @ORM\Column(name="iucn", type="string", length=25, nullable=true)
     */
    private $iucn;

    /**
     * @var string
     *
     * @ORM\Column(name="season", type="string", length=255, nullable=true)
     */
    private $season;

    /**
     * @var string
     *
     * @ORM\Column(name="distribution", type="string", length=255, nullable=true)
     */
    private $distribution;

    /**
     * @var string
     *
     * @ORM\Column(name="rareness", type="text", nullable=true)
     */
    private $rareness;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="website_url", type="string", length=255, nullable=true)
     */
    private $websiteUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="image_tip", type="string", length=125, nullable=true)
     */
    private $imageTip;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="text", nullable=true)
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="videos", type="text", nullable=true)
     */
    private $videos;

    /**
     * @var string
     *
     * @ORM\Column(name="audios", type="text", nullable=true)
     */
    private $audios;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lat;

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
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

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

    public function getScientificName() {
        return $this->scientificName;
    }

    public function getCommonName() {
        return $this->commonName;
    }

    public function getIucn() {
        return $this->iucn;
    }

    public function getSeason() {
        return $this->season;
    }

    public function getDistribution() {
        return $this->distribution;
    }

    public function getRareness() {
        return $this->rareness;
    }

    public function getCode() {
        return $this->code;
    }

    public function getWebsiteUrl() {
        return $this->websiteUrl;
    }

    public function getImageTip() {
        return $this->imageTip;
    }

    public function getImages() {
        return $this->images;
    }

    public function getVideos() {
        return $this->videos;
    }

    public function getAudios() {
        return $this->audios;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getLng() {
        return $this->lng;
    }

    public function getLat() {
        return $this->lat;
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

    public function getUser(): \App\Entity\Map2u\Core\User {
        return $this->user;
    }

    public function getFamily(): \BirdFamily {
        return $this->family;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setScientificName($scientificName) {
        $this->scientificName = $scientificName;
    }

    public function setCommonName($commonName) {
        $this->commonName = $commonName;
    }

    public function setIucn($iucn) {
        $this->iucn = $iucn;
    }

    public function setSeason($season) {
        $this->season = $season;
    }

    public function setDistribution($distribution) {
        $this->distribution = $distribution;
    }

    public function setRareness($rareness) {
        $this->rareness = $rareness;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setWebsiteUrl($websiteUrl) {
        $this->websiteUrl = $websiteUrl;
    }

    public function setImageTip($imageTip) {
        $this->imageTip = $imageTip;
    }

    public function setImages($images) {
        $this->images = $images;
    }

    public function setVideos($videos) {
        $this->videos = $videos;
    }

    public function setAudios($audios) {
        $this->audios = $audios;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function setLat($lat) {
        $this->lat = $lat;
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

    public function setUser(\App\Entity\Map2u\Core\User $user) {
        $this->user = $user;
    }

    public function setFamily(\BirdFamily $family) {
        $this->family = $family;
    }



}
