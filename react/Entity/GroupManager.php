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
use Map2u\CoreBundle\Model\GroupInterface;
use Map2u\CoreBundle\Model\GroupManagerInterface;
use Sonata\CoreBundle\Model\BaseEntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class GroupManager extends BaseEntityManager implements GroupManagerInterface {

    /**
     * @var array
     */
    protected $categories;
    protected $user;
    protected $userId;

    /**
     * @param string                  $class
     * @param ManagerRegistry         $registry

     */
    public function __construct($class, ManagerRegistry $registry, SecurityContext $securityContext) {
        parent::__construct($class, $registry);
        $this->user = $securityContext->getToken()->getUser();
        if ($this->user) {
            $this->userId = $this->user->getId();
        } else {
            $this->userId = 0;
        }
        $this->categories = array();
    }

    /**
     * @return CategoryInterface
     */
    public function getRootCategory() {
        $this->loadCategories();
        
        
        return $this->categories;
    }

    /**
     * @return CategoryInterface[]
     */
    public function getRootCategories($loadChildren = true) {
        $class = $this->getClass();
        if ($this->user) {
            $rootCategories = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.parent IS NULL and (c.user=:user or c.public=true)', $class))
                    ->setParameter('user', $this->user)
                    ->execute();
        } else {
            $rootCategories = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.parent IS NULL and  c.public=true ', $class))
                    ->execute();
        }
        $categories = array();

     
        
        foreach ($rootCategories as $category) {
            
            $categories = $loadChildren ? $this->getRootCategory($category->getUser()) : $category;
        }
        return $rootCategories;//$categories;
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

//        $categories = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.user = :user ORDER BY c.parent ASC', $class))
//                ->setParameter('user', $this->user)
//                ->execute();

        $categories = $this->getObjectManager()->createQuery(sprintf('SELECT c FROM %s c WHERE c.user = :user ORDER BY c.parent ASC', $class))
                ->setParameter('user', $this->user)
                ->execute();
        if (count($categories) == 0) {
            // no category, create one for the provided context
            $category = $this->create();
            $category->setName('default');
            $category->setEnabled(true);
            $category->setPublic(false);
            $category->setUser($this->user);
            $category->setDescription('default category created by system');

            $this->save($category);

            $categories = array($category);
        }
        $root = array();
        foreach ($categories as $pos => $category) {
            if ($category->getParent() == null) {
                array_push($root, $category);
            }
            $this->categories[$this->userId][$category->getId()] = $category;
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
