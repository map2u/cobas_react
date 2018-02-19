<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMapShare
 *
 * @ORM\Table(name="user_map_share", indexes={@ORM\Index(name="idx_6f105fd2abfe1c6f", columns={"user_uuid"})})
 * @ORM\Entity
 */
class UserMapShare
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=2500, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="extent", type="string", length=2500, nullable=true)
     */
    private $extent;

    /**
     * @var string
     *
     * @ORM\Column(name="layers_on", type="string", length=2500, nullable=true)
     */
    private $layersOn;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=2500, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2500, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="share_emails", type="text", nullable=true)
     */
    private $shareEmails;

    /**
     * @var boolean
     *
     * @ORM\Column(name="default_show_on_map", type="boolean", nullable=false)
     */
    private $defaultShowOnMap;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_uuid", referencedColumnName="id")
     * })
     */
    private $userUuid;

    public function getId(): guid {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getExtent() {
        return $this->extent;
    }

    public function getLayersOn() {
        return $this->layersOn;
    }

    public function getLink() {
        return $this->link;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getShareEmails() {
        return $this->shareEmails;
    }

    public function getDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    public function getUserUuid(): \App\Entity\Map2u\Core\User {
        return $this->userUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setExtent($extent) {
        $this->extent = $extent;
    }

    public function setLayersOn($layersOn) {
        $this->layersOn = $layersOn;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setShareEmails($shareEmails) {
        $this->shareEmails = $shareEmails;
    }

    public function setDefaultShowOnMap($defaultShowOnMap) {
        $this->defaultShowOnMap = $defaultShowOnMap;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
    }


}
