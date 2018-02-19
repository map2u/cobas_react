<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdSeason
 *
 * @ORM\Table(name="bird_season")
 * @ORM\Entity
 */
class BirdSeason
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
     * @ORM\Column(name="season_name", type="string", length=255, nullable=false)
     */
    private $seasonName;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;

    public function getId() {
        return $this->id;
    }

    public function getSeasonName() {
        return $this->seasonName;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setSeasonName($seasonName) {
        $this->seasonName = $seasonName;
    }

    public function setCode($code) {
        $this->code = $code;
    }


}
