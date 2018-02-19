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

use Map2u\CoreBundle\Entity\BaseLayerCategory;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

class LayerCategory extends BaseLayerCategory {

    use ORMBehaviors\Translatable\Translatable;

    protected $id;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groups;


    /**
     * Add groups
     *
     * @param \Application\Sonata\UserBundle\Entity\Group $groups
     * @return LayerCategory
     */
    public function addGroup(\Application\Sonata\UserBundle\Entity\Group $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \Application\Sonata\UserBundle\Entity\Group $groups
     */
    public function removeGroup(\Application\Sonata\UserBundle\Entity\Group $groups)
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
