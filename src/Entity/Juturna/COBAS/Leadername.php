<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leadername
 *
 * @ORM\Table(name="leadername")
 * @ORM\Entity
 */
class Leadername
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
     * @ORM\Column(name="leadername", type="string", length=255, nullable=true)
     */
    private $leadername;

    public function getId() {
        return $this->id;
    }

    public function getLeadername() {
        return $this->leadername;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLeadername($leadername) {
        $this->leadername = $leadername;
    }


}
