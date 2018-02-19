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

use Map2u\CoreBundle\Entity\BaseSymbolizedLayer;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

class SymbolizedLayer extends BaseSymbolizedLayer {

    use ORMBehaviors\Translatable\Translatable;

    protected $id;
    protected $map;
    protected $layer;
    protected $layerCategory;

    /**
     * Set map
     *
     * @param mixed $map
     * @return mixed
     */
    public function setMap($map) {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return mixed 
     */
    public function getMap() {
        return $this->map;
    }

    /**
     * Set layer
     *
     * @param mixed $layer
     * @return mixed
     */
    public function setLayer($layer) {
        $this->layer = $layer;
        return $this;
    }

    /**
     * Get layer
     *
     * @return mixed 
     */
    public function getLayer() {
        return $this->layer;
    }

    public function __toString() {
        return $this->name;
    }

}
