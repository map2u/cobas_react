<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdDistribution
 *
 * @ORM\Table(name="bird_distribution")
 * @ORM\Entity
 */
class BirdDistribution
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
     * @ORM\Column(name="distribution_name", type="string", length=255, nullable=false)
     */
    private $distributionName;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;

    public function getId() {
        return $this->id;
    }

    public function getDistributionName() {
        return $this->distributionName;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDistributionName($distributionName) {
        $this->distributionName = $distributionName;
    }

    public function setCode($code) {
        $this->code = $code;
    }


}
