<?php

namespace Map2u\CoreBundle\Entity;


use Map2u\CoreBundle\Model\BaseEntityManager;
use Map2u\CoreBundle\Model\UserGeometryInterface;
use Map2u\CoreBundle\Model\UserGeometryManagerInterface;

class BaseUserGeometryManager extends BaseEntityManager implements UserGeometryManagerInterface
{
    /**
     * BC Compatibility.
     *
     * @deprecated Please use save() from now
     *
     * @param UserGeometryInterface $userGeometryInterface
     */
    public function update(UserGeometryInterface $userGeometryInterface)
    {
        parent::save($userGeometryInterface);
    }
}


