<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Map2u\CoreBundle\Model;


abstract class UserGeometryManager implements UserGeometryManagerInterface
{
    /**
     * Creates an empty gallery instance
     *
     * @return Gallery
     */
    public function create()
    {
        $class = $this->getClass();

        return new $class;
    }
}


