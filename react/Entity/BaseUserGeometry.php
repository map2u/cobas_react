<?php

namespace Map2u\CoreBundle\Entity;

use Map2u\CoreBundle\Model\UserGeometry as ModelUserGeometry;

abstract class BaseUserGeometry extends ModelUserGeometry {

  


    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }
}
