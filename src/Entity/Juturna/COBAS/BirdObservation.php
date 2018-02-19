<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdObservation
 *
 * @ORM\Table(name="bird_observation", indexes={@ORM\Index(name="idx_4343d96c21bdb235", columns={"station_id"}), @ORM\Index(name="idx_4343d96c88e1ea57", columns={"breedingstatus_id"}), @ORM\Index(name="idx_4343d96cb2a1d860", columns={"species_id"}), @ORM\Index(name="idx_4343d96ce813f9", columns={"bird_id"})})
 * @ORM\Entity
 */
class BirdObservation
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
     * @ORM\Column(name="observation_description", type="string", length=10, nullable=true)
     */
    private $observationDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="observed_at", type="datetime", nullable=true)
     */
    private $observedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
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
     * @var json
     *
     * @ORM\Column(name="images", type="json", nullable=true)
     */
    private $images;

    /**
     * @var json
     *
     * @ORM\Column(name="videos", type="json", nullable=true)
     */
    private $videos;

    /**
     * @var json
     *
     * @ORM\Column(name="audios", type="json", nullable=true)
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
     * @var \Station
     *
     * @ORM\ManyToOne(targetEntity="Station")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="station_id", referencedColumnName="id")
     * })
     */
    private $station;

    /**
     * @var \BirdBreedingstatus
     *
     * @ORM\ManyToOne(targetEntity="BirdBreedingstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="breedingstatus_id", referencedColumnName="id")
     * })
     */
    private $breedingstatus;

    /**
     * @var \BirdSpecies
     *
     * @ORM\ManyToOne(targetEntity="BirdSpecies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     * })
     */
    private $species;

    /**
     * @var \Birds
     *
     * @ORM\ManyToOne(targetEntity="Birds")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bird_id", referencedColumnName="id")
     * })
     */
    private $bird;

    public function getId() {
        return $this->id;
    }

    public function getObservationDescription() {
        return $this->observationDescription;
    }

    public function getObservedAt(): \DateTime {
        return $this->observedAt;
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

    public function getImages(): json {
        return $this->images;
    }

    public function getVideos(): json {
        return $this->videos;
    }

    public function getAudios(): json {
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

    public function getStation(): \Station {
        return $this->station;
    }

    public function getBreedingstatus(): \BirdBreedingstatus {
        return $this->breedingstatus;
    }

    public function getSpecies(): \BirdSpecies {
        return $this->species;
    }

    public function getBird(): \Birds {
        return $this->bird;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setObservationDescription($observationDescription) {
        $this->observationDescription = $observationDescription;
    }

    public function setObservedAt(\DateTime $observedAt) {
        $this->observedAt = $observedAt;
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

    public function setImages(json $images) {
        $this->images = $images;
    }

    public function setVideos(json $videos) {
        $this->videos = $videos;
    }

    public function setAudios(json $audios) {
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

    public function setStation(\Station $station) {
        $this->station = $station;
    }

    public function setBreedingstatus(\BirdBreedingstatus $breedingstatus) {
        $this->breedingstatus = $breedingstatus;
    }

    public function setSpecies(\BirdSpecies $species) {
        $this->species = $species;
    }

    public function setBird(\Birds $bird) {
        $this->bird = $bird;
    }


}
