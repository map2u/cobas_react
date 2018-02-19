<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * BirdFamily
 *
 * @ORM\Table(name="bird_family")
 * @ORM\Entity
 */
class BirdFamily
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
     * @ORM\Column(name="family_name", type="string", length=255, nullable=false)
     */
    private $familyName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    public function getId() {
        return $this->id;
    }

    public function getFamilyName() {
        return $this->familyName;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFamilyName($familyName) {
        $this->familyName = $familyName;
    }

    public function setDescription($description) {
        $this->description = $description;
    }


}
