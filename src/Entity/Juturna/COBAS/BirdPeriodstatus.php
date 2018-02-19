<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdPeriodstatus
 *
 * @ORM\Table(name="bird_periodstatus")
 * @ORM\Entity
 */
class BirdPeriodstatus
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
     * @ORM\Column(name="status_name", type="string", length=255, nullable=false)
     */
    private $statusName;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;
    public function getId() {
        return $this->id;
    }

    public function getStatusName() {
        return $this->statusName;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setStatusName($statusName) {
        $this->statusName = $statusName;
    }

    public function setCode($code) {
        $this->code = $code;
    }



}
