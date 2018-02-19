<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdIucn
 *
 * @ORM\Table(name="bird_iucn")
 * @ORM\Entity
 */
class BirdIucn
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
     * @ORM\Column(name="iucn_name", type="string", length=255, nullable=false)
     */
    private $iucnName;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;

    public function getId() {
        return $this->id;
    }

    public function getIucnName() {
        return $this->iucnName;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIucnName($iucnName) {
        $this->iucnName = $iucnName;
    }

    public function setCode($code) {
        $this->code = $code;
    }


}
