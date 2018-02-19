<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdPeriod
 *
 * @ORM\Table(name="bird_period")
 * @ORM\Entity
 */
class BirdPeriod
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
     * @ORM\Column(name="period_name", type="string", length=255, nullable=false)
     */
    private $periodName;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;
    public function getId() {
        return $this->id;
    }

    public function getPeriodName() {
        return $this->periodName;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPeriodName($periodName) {
        $this->periodName = $periodName;
    }

    public function setCode($code) {
        $this->code = $code;
    }



}
