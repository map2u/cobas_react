<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaGalleryMedia
 *
 * @ORM\Table(name="media__gallery_media", indexes={@ORM\Index(name="idx_80d4c541ea9fdd75", columns={"media_id"}), @ORM\Index(name="idx_80d4c5414e7af8f", columns={"gallery_id"})})
 * @ORM\Entity
 */
class MediaGalleryMedia {

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
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \MediaGallery
     *
     * @ORM\ManyToOne(targetEntity="MediaGallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gallery_id", referencedColumnName="id")
     * })
     */
    private $gallery;

    /**
     * @var \MediaMedia
     *
     * @ORM\ManyToOne(targetEntity="MediaMedia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     * })
     */
    private $media;

    public function getId() {
        return $this->id;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getGallery(): \MediaGallery {
        return $this->gallery;
    }

    public function getMedia(): \MediaMedia {
        return $this->media;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setGallery(\MediaGallery $gallery) {
        $this->gallery = $gallery;
    }

    public function setMedia(\MediaMedia $media) {
        $this->media = $media;
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
