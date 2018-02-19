<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreLayer
 *
 * @ORM\Table(name="map2u_core__layer_type", indexes={ @ORM\Index(name="idx_uh5656dbabfe1c6f", columns={"user_uuid"})})
 * @ORM\Entity
 */
class LayerType
{
    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

   

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shared", type="boolean", nullable=true)
     */
    private $shared;

   
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

   
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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

   

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_uuid", referencedColumnName="id")
     * })
     */
    private $userUuid;

 

   
    /**
     * Constructor
     */
    public function __construct()
    {
      }
      public function getId() {
          return $this->id;
      }

      public function getEnabled() {
          return $this->enabled;
      }

      public function getPublic() {
          return $this->public;
      }

      public function getPosition() {
          return $this->position;
      }

      public function getShared() {
          return $this->shared;
      }

      public function getName() {
          return $this->name;
      }

      public function getCreatedAt() {
          return $this->createdAt;
      }

      public function getUpdatedAt() {
          return $this->updatedAt;
      }

      public function getDescription() {
          return $this->description;
      }

      public function getUserUuid(): \App\Entity\Map2u\Core\User {
          return $this->userUuid;
      }

      public function setId(guid $id) {
          $this->id = $id;
      }

      public function setEnabled($enabled) {
          $this->enabled = $enabled;
      }

      public function setPublic($public) {
          $this->public = $public;
      }

      public function setPosition($position) {
          $this->position = $position;
      }

      public function setShared($shared) {
          $this->shared = $shared;
      }

      public function setName($name) {
          $this->name = $name;
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

      public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
          $this->userUuid = $userUuid;
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
