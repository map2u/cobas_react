<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * MapTranslation
 */
class MapTranslation {

    use ORMBehaviors\Translatable\Translation;

    /**
     * @var string
     */
    private $mapTitle;

    /**
     * @var string
     */
    private $description;

    /**
     * Set mapTitle
     *
     * @param string $mapTitle
     * @return MapTranslation
     */
    public function setMapTitle($mapTitle) {
        $this->mapTitle = $mapTitle;

        return $this;
    }

    /**
     * Get mapTitle
     *
     * @return string 
     */
    public function getMapTitle() {
        return $this->mapTitle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MapTranslation
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

}
