<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdRareness
 *
 * @ORM\Table(name="bird_rareness")
 * @ORM\Entity
 */
class BirdRareness
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
     * @ORM\Column(name="rareness_name", type="string", length=255, nullable=false)
     */
    private $rarenessName;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;

    public function getId() {
        return $this->id;
    }

    public function getRarenessName() {
        return $this->rarenessName;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRarenessName($rarenessName) {
        $this->rarenessName = $rarenessName;
    }

    public function setCode($code) {
        $this->code = $code;
    }


}
