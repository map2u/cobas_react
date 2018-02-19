<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * RegionTranslation
 */
class RegionTranslation {

    use ORMBehaviors\Translatable\Translation;

    /**
     * @var string
     */
    private $name;

    /**
     * Set name
     *
     * @param string $name
     * @return RegionTranslation
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

}
