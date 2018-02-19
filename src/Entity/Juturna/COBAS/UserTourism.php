<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTourism
 *
 * @ORM\Table(name="user_tourism", indexes={@ORM\Index(name="idx_a4f74814a76ed395", columns={"user_id"}), @ORM\Index(name="idx_a4f74814ef1701d", columns={"tourismgeom_id"})})
 * @ORM\Entity
 */
class UserTourism
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
     * @var boolean
     *
     * @ORM\Column(name="is_enabled", type="boolean", nullable=true)
     */
    private $isEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=true)
     */
    private $isPublished;

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
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \UserTourismGeoms
     *
     * @ORM\ManyToOne(targetEntity="UserTourismGeom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tourismgeom_id", referencedColumnName="id")
     * })
     */
    private $tourismgeoms;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }

    public function getIsEnabled() {
        return $this->isEnabled;
    }

    public function getIsPublished() {
        return $this->isPublished;
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

    public function getDescription() {
        return $this->description;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getUser(): \App\Entity\Map2u\Core\User {
        return $this->user;
    }

    public function getTourismgeoms(): \UserTourismGeoms {
        return $this->tourismgeoms;
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

    public function setIsEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }

    public function setIsPublished($isPublished) {
        $this->isPublished = $isPublished;
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

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setUser(\App\Entity\Map2u\Core\User $user) {
        $this->user = $user;
    }

    public function setTourismgeoms(\UserTourismGeoms $tourismgeoms) {
        $this->tourismgeoms = $tourismgeoms;
    }


}
