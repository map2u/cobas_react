<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Sonata Project <https://github.com/sonata-project/SonataClassificationBundle/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Map2u\CoreBundle\Entity;

use Map2u\CoreBundle\Entity\BaseMap;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

class Map extends BaseMap {

    use ORMBehaviors\Translatable\Translatable;

    protected $symbolizedLayers;
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
     * @return Map
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
