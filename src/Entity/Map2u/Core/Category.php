<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreCategory
 *
 * @ORM\Table(name="map2u_core_category")
 * @ORM\Entity
 */
class Category {

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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=false)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=false)
     */
    private $public;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

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
     * @var guid
     *
     * @ORM\Column(name="parent", type="guid", nullable=false)
     */
    private $parent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="multiple", type="boolean", nullable=false)
     */
    private $multiple;

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    /**
     * get name
     *
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getPublic() {
        return $this->public;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function getParent(): guid {
        return $this->parent;
    }

    public function getMultiple() {
        return $this->multiple;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setUserId(guid $userId) {
        $this->userId = $userId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setPublic($public) {
        $this->public = $public;
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

    public function setParent(guid $parent) {
        $this->parent = $parent;
    }

    public function setMultiple($multiple) {
        $this->multiple = $multiple;
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
