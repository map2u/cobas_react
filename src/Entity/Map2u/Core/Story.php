<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreStory
 *
 * @ORM\Table(name="map2u_core_story")
 * @ORM\Entity
 */
class Story {

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
     * @ORM\Column(name="story_name", type="string", length=255, nullable=false)
     */
    private $storyName;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=false)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="geom_type", type="string", length=255, nullable=false)
     */
    private $geomType;

    /**
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=false)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="image_file", type="string", length=255, nullable=false)
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="story_file", type="string", length=255, nullable=false)
     */
    private $storyFile;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

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
     * @ORM\Column(name="story_file_type", type="string", length=255, nullable=false)
     */
    private $storyFileType;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_text", type="string", length=255, nullable=false)
     */
    private $altText;

    /**
     * @var string
     *
     * @ORM\Column(name="story_text", type="string", length=255, nullable=false)
     */
    private $storyText;

    public function getId(): guid {
        return $this->id;
    }

    public function getUserId(): guid {
        return $this->userId;
    }

    public function getStoryName() {
        return $this->storyName;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getType() {
        return $this->type;
    }

    public function getGeomType() {
        return $this->geomType;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getImageFile() {
        return $this->imageFile;
    }

    public function getStoryFile() {
        return $this->storyFile;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getStoryFileType() {
        return $this->storyFileType;
    }

    public function getAltText() {
        return $this->altText;
    }

    public function getStoryText() {
        return $this->storyText;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setUserId(guid $userId) {
        $this->userId = $userId;
    }

    public function setStoryName($storyName) {
        $this->storyName = $storyName;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setGeomType($geomType) {
        $this->geomType = $geomType;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function setImageFile($imageFile) {
        $this->imageFile = $imageFile;
    }

    public function setStoryFile($storyFile) {
        $this->storyFile = $storyFile;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setStoryFileType($storyFileType) {
        $this->storyFileType = $storyFileType;
    }

    public function setAltText($altText) {
        $this->altText = $altText;
    }

    public function setStoryText($storyText) {
        $this->storyText = $storyText;
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
