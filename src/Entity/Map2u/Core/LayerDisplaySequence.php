<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreLayerdisplaysequence
 *
 * @ORM\Table(name="map2u_core__layerdisplaysequence", indexes={@ORM\Index(name="idx_11648073abfe1c6f", columns={"user_uuid"})})
 * @ORM\Entity
 */
class LayerDisplaySequence
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
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sequence", type="text", nullable=false)
     */
    private $sequence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="default", type="boolean", nullable=true)
     */
    private $default;

    /**
     * @var string
     *
     * @ORM\Column(name="selected_action", type="text", nullable=true)
     */
    private $selectedAction;

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

    public function getSequence() {
        return $this->sequence;
    }

    public function getDefault() {
        return $this->default;
    }

    public function getSelectedAction() {
        return $this->selectedAction;
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

    public function setSequence($sequence) {
        $this->sequence = $sequence;
    }

    public function setDefault($default) {
        $this->default = $default;
    }

    public function setSelectedAction($selectedAction) {
        $this->selectedAction = $selectedAction;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
    }



}
