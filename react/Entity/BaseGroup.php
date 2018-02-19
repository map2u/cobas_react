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

use Map2u\CoreBundle\Model\Group as ModelGroup;

abstract class BaseGroup extends ModelGroup {

   

    public function disableChildrenLazyLoading() {
        if (is_object($this->children)) {
            $this->children->setInitialized(true);
        }
    }

 


    /**
     * Set allowedGroupLogin
     *
     * @param boolean $allowedGroupLogin
     * @return BaseGroup
     */
    public function setAllowedGroupLogin($allowedGroupLogin)
    {
        $this->allowedGroupLogin = $allowedGroupLogin;

        return $this;
    }

    /**
     * Get allowedGroupLogin
     *
     * @return boolean 
     */
    public function getAllowedGroupLogin()
    {
        return $this->allowedGroupLogin;
    }
}
