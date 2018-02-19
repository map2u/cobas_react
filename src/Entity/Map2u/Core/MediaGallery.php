<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaGallery
 *
 * @ORM\Table(name="media__gallery")
 * @ORM\Entity
 */
class MediaGallery {

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
     * @ORM\Column(name="context", type="string", length=64, nullable=false)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="default_format", type="string", length=255, nullable=false)
     */
    private $defaultFormat;

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

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getContext() {
        return $this->context;
    }

    public function getDefaultFormat() {
        return $this->defaultFormat;
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

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setContext($context) {
        $this->context = $context;
    }

    public function setDefaultFormat($defaultFormat) {
        $this->defaultFormat = $defaultFormat;
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
