<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Map2u\CoreBundle\Entity;

use Doctrine\Common\Persistence\ManagerRegistry;
use Map2u\CoreBundle\Model\CategoryInterface;
use Map2u\CoreBundle\Model\LayerManagerInterface;
use Sonata\CoreBundle\Model\BaseEntityManager;

class LayerManager extends BaseEntityManager implements LayerManagerInterface {

    /**
     * @var array
     */
    protected $layers;
    protected $user;

    /**
     * @param string                  $class
     * @param ManagerRegistry         $registry

     */
    public function __construct($class, ManagerRegistry $registry) {
        parent::__construct($class, $registry);

        $this->layers = array();
    }

    /**
     * @return CategoryInterface
     */
    public function getLayers($user) {

        $class = $this->getClass();
        $this->layers = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.user = :user ORDER BY c.position ASC', $class))
                ->setParameter('user', $user)
                ->execute();
        return $this->layers;
    }

    /**
     * Load all categories from the database, the current method is very efficient for < 256 categories
     *
     */
    protected function loadLayers($user) {


        $class = $this->getClass();

        $layers = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.user = :user ORDER BY c.position ASC', $class))
                ->setParameter('user', $user)
                ->execute();
    }

}
