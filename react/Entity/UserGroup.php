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

use Map2u\CoreBundle\Entity\BaseGroup;

class UserGroup extends BaseGroup {

    protected $symbolizedlayers;
    protected $id;
    protected $groupAdmin;
    protected $user;
    /**
     * Add symbolizedlayer
     *
     * @param \Map2u\CoreBundle\Model\MapLayerInterface $symbolizedlayer
     * @return mixed
     */
    public function addSymbolizedLayer(\Map2u\CoreBundle\Model\SymbolizedLayerInterface $symbolizedlayer) {
        $this->symbolizedlayers[] = $symbolizedlayer;

        return $this;
    }

    /**
     * Remove symbolizedlayer
     *
     * @param \Map2u\CoreBundle\Model\SymbolizedLayerInterface $symbolizedlayer
     */
    public function removeSymbolizedLayer(\Map2u\CoreBundle\Model\SymbolizedLayerInterface $symbolizedlayer) {
        $this->symbolizedlayers->removeElement($symbolizedlayer);
    }

    /**
     * Get symbolizedlayers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSymbolizedLayers() {
        return $this->symbolizedlayers;
    }


    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return UserGroup
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
