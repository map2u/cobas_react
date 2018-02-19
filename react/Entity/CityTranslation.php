<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * CityTranslation
 */
class CityTranslation {

    use ORMBehaviors\Translatable\Translation;

    /**
     * @var string
     */
    private $name;

    /**
     * Set name
     *
     * @param string $name
     * @return CityTranslation
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
