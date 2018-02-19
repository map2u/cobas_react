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
use Map2u\CoreBundle\Model\MapManagerInterface;
use Sonata\CoreBundle\Model\BaseEntityManager;

class MapManager extends BaseEntityManager implements MapManagerInterface {

    /**
     * @var array
     */
    protected $symbolizedlayers;
    protected $user;

    /**
     * @param string                  $class
     * @param ManagerRegistry         $registry

     */
    public function __construct($class, ManagerRegistry $registry) {
        parent::__construct($class, $registry);

        $this->categories = array();
    }

    /**
     * @return CategoryInterface
     */
    public function getRootCategory($user) {
        $this->loadCategories($user);

        return $this->categories[0];
    }
     /**
     * @return CategoryInterface
     */
    public function findAll() {
        

        return $this->categories;
    }

    /**
     * @return CategoryInterface[]
     */
    public function getRootCategories($loadChildren = true) {
        $class = $this->getClass();

        $rootCategories = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.parent IS NULL', $class))
                ->execute();

        $categories = array();

        foreach ($rootCategories as $category) {

            $categories = $loadChildren ? $this->getRootCategory($category->getContext()) : $category;
        }

        return $categories;
    }

    /**
     * @param ContextInterface $context
     *
     * @return array
     */
    public function getCategories() {

        return $this->categories;
    }

    /**
     * Load all categories from the database, the current method is very efficient for < 256 categories
     *
     */
    protected function loadCategories() {


        $class = $this->getClass();

        $categories = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.context = :context ORDER BY c.parent ASC', $class))
                ->setParameter('context', $context->getId())
                ->execute();

        if (count($categories) == 0) {
            // no category, create one for the provided context
            $category = $this->create();
            $category->setName($context->getName());
            $category->setEnabled(true);

            $category->setDescription($context->getName());

            $this->save($category);

            $categories = array($category);
        }

        foreach ($categories as $pos => $category) {
            if ($category->getParent() == null) {
                $root = $category;
            }
            $this->categories[$context->getId()][$category->getId()] = $category;
            $parent = $category->getParent();
            $category->disableChildrenLazyLoading();
            if ($parent) {
                $parent->addChild($category);
            }
        }

        $this->categories = array(
            0 => $root
        );
    }

}
