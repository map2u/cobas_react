<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Map2u\CoreBundle\Entity\BaseLayer;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Layer
 */
class Layer extends BaseLayer {

    use ORMBehaviors\Translatable\Translatable;

    protected $symbolizedLayers;
    protected $category;
    protected $layerCategory;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->symbolizedLayers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add symbolizedLayers
     *
     * @param \Map2u\CoreBundle\Entity\SymbolizedLayer $symbolizedLayers
     * @return mixed
     */
    public function addSymbolizedLayer(\Map2u\CoreBundle\Entity\SymbolizedLayer $symbolizedLayers) {
        $this->symbolizedLayers[] = $symbolizedLayers;

        return $this;
    }

    /**
     * Remove symbolizedLayers
     *
     * @param \Map2u\CoreBundle\Entity\SymbolizedLayer $symbolizedLayers
     */
    public function removeSymbolizedLayer(\Map2u\CoreBundle\Entity\SymbolizedLayer $symbolizedLayers) {
        $this->symbolizedLayers->removeElement($symbolizedLayers);
    }

    /**
     * Get symbolizedLayers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSymbolizedLayers() {
        return $this->symbolizedLayers;
    }


    /**
     * Add groups
     *
     * @param \Map2u\CoreBundle\Entity\UserGroup $groups
     * @return Layer
     */
    public function addGroup(\Map2u\CoreBundle\Entity\UserGroup $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \Map2u\CoreBundle\Entity\UserGroup $groups
     */
    public function removeGroup(\Map2u\CoreBundle\Entity\UserGroup $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
