<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdSpecies
 *
 * @ORM\Table(name="bird_species")
 * @ORM\Entity
 */
class BirdSpecies
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
     * @ORM\Column(name="code", type="string", length=8, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="species_name", type="string", length=255, nullable=false)
     */
    private $speciesName;

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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="iucn", type="string", length=25, nullable=true)
     */
    private $iucn;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Station", mappedBy="species")
     */
    private $station;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->station = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function getId() {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getSpeciesName() {
        return $this->speciesName;
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

    public function getDescription() {
        return $this->description;
    }

    public function getIucn() {
        return $this->iucn;
    }

    public function getStation(): \Doctrine\Common\Collections\Collection {
        return $this->station;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setSpeciesName($speciesName) {
        $this->speciesName = $speciesName;
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

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setIucn($iucn) {
        $this->iucn = $iucn;
    }

    public function setStation(\Doctrine\Common\Collections\Collection $station) {
        $this->station = $station;
    }


}
