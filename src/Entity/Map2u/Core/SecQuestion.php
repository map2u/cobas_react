<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreSecQuestion
 *
 * @ORM\Table(name="map2u_core__sec_question")
 * @ORM\Entity
 */
class SecQuestion
{
    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
      */
    private $id;
    public function getId(): guid {
        return $this->id;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }



}
