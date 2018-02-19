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

use Map2u\CoreBundle\Model\Layer as ModelLayer;

abstract class BaseLayer extends ModelLayer
{
   
    public function groupshared() {
        return true;
    }

    public function disableChildrenLazyLoading()
    {
        if (is_object($this->children)) {
            $this->children->setInitialized(true);
        }
    }

    /**
     * Set projectId
     *
     * @param guid $projectId
     * @return BaseLayer
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return guid 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
}
