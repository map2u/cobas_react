<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreSidebarMenu
 *
 * @ORM\Table(name="map2u_core__sidebar_menu", indexes={@ORM\Index(name="idx_90881ad6727aca70", columns={"parent_id"}), @ORM\Index(name="idx_90881ad6abfe1c6f", columns={"user_uuid"})})
 * @ORM\Entity
 */
class SidebarMenu {

    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
      */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=250, nullable=true)
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
     * @var boolean
     *
     * @ORM\Column(name="multiple", type="boolean", nullable=true)
     */
    private $multiple;

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
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="routing", type="string", length=250, nullable=true)
     */
    private $routing;

    /**
     * @var string
     *
     * @ORM\Column(name="icon_class", type="string", length=250, nullable=true)
     */
    private $iconClass;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expanded", type="boolean", nullable=true)
     */
    private $expanded;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clickable", type="boolean", nullable=true)
     */
    private $clickable;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_uuid", referencedColumnName="id", nullable=false)
     * })
     */
    private $userUuid;

    /**
     * @var guid
     *
     * @ORM\Column(name="parent_id",type="guid",nullable=true)
     */
    private $parent_id;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
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

    public function getMultiple() {
        return $this->multiple;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getRouting() {
        return $this->routing;
    }

    public function getIconClass() {
        return $this->iconClass;
    }

    public function getExpanded() {
        return $this->expanded;
    }

    public function getClickable() {
        return $this->clickable;
    }

    public function getUserUuid() {
        return $this->userUuid;
    }

    public function getParentId() {
        return $this->parent_id;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
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

    public function setMultiple($multiple) {
        $this->multiple = $multiple;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setRouting($routing) {
        $this->routing = $routing;
    }

    public function setIconClass($iconClass) {
        $this->iconClass = $iconClass;
    }

    public function setExpanded($expanded) {
        $this->expanded = $expanded;
    }

    public function setClickable($clickable) {
        $this->clickable = $clickable;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
    }

    public function setParentId(guid $parent_id) {
        $this->parent_id = $parent_id;
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
