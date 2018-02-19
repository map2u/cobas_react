<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Sonata Project <https://github.com/sonata-project/SonataClassificationBundle/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Map2u\CoreBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Map2u\CoreBundle\Model\LayerCategoryInterface;
use Application\Sonata\UserBundle\Entity\User;
use Symfony\Component\Locale as Locale;
use Map2u\CoreBundle\Controller\DefaultMethods;

abstract class LayerCategory implements LayerCategoryInterface {

    protected $id;
    protected $userId;
    protected $name;
    protected $title;
    protected $locale = 'en';
    protected $slug;
    protected $enabled;
    protected $public;
    protected $description;
    protected $createdAt;
    protected $updatedAt;
    protected $position;
    protected $children;
    protected $parent;
    protected $multiple;
    protected $user;
    protected $layers;

    /**
     * Constructor
     */
    public function __construct() {
        $this->layers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId() {
        $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name) {
        $this->name = $name;
        //    $this->setSlug($name);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() {
        $this->getLocale();
        if (method_exists($this, "translate")) {
            if (isset($this->locale) && $this->locale !== null && strlen(trim($this->locale)) > 1) {
                $this->title = $this->translate($this->locale)->getTitle();
            } else {
                $this->title = $this->translate('en')->getTitle();
            }
        }
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function setPublic($public) {
        $this->public = $public;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublic() {
        return $this->public;
    }

    /**
     * {@inheritdoc}
     */
    public function setSlug($slug) {
        
    }

    /**
     * {@inheritdoc}
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        $this->getLocale();
        if (method_exists($this, "translate")) {
            if (isset($this->locale) && $this->locale !== null && strlen(trim($this->locale)) > 1) {
                $this->description = $this->translate($this->locale)->getDescription();
            } else {
                $this->description = $this->translate('en')->getDescription();
            }
        }
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString() {
        if($this->name===null) {
            $this->name='Default Category';
        }
        return $this->name;
    }

    public function prePersist() {
        $this->setCreatedAt(new \DateTime);
        $this->setUpdatedAt(new \DateTime);
    }

    public function preUpdate() {
        $this->setUpdatedAt(new \DateTime);
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setPosition($position) {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple($multiple) {
        $this->multiple = $multiple;
    }

    /**
     * @return mixed
     */
    public function getMultiple() {
        return $this->multiple;
    }

    /**
     * @param LayerCategoryInterface $child
     *
     * @deprecated only used by the AdminHelper
     */
    public function addChildren(LayerCategoryInterface $child) {
        $this->addChild($child, true);
    }

    /**
     * {@inheritdoc}
     */
    public function addChild(LayerCategoryInterface $child, $nested = false) {
        $this->children[] = $child;

        if (!$nested) {
            $child->setParent($this, true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeChild(LayerCategoryInterface $childToDelete) {
        foreach ($this->getChildren() as $pos => $child) {
            if ($childToDelete->getId() && $child->getId() === $childToDelete->getId()) {
                unset($this->children[$pos]);

                return;
            }

            if (!$childToDelete->getId() && $child === $childToDelete) {
                unset($this->children[$pos]);

                return;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren() {
        return $this->children;
    }

    /**
     * {@inheritdoc}
     */
    public function setChildren($children) {
        $this->children = new ArrayCollection();

        foreach ($children as $category) {
            $this->addChild($category);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasChildren() {
        return count($this->children) > 0;
    }

    /**
     * {@inheritdoc}
     */
    public function setParent(LayerCategoryInterface $parent = null, $nested = false) {
        $this->parent = $parent;

        if (!$nested && $parent) {
            $parent->addChild($this, true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * {@inheritdoc}
     */
    public function setUser(User $user = null) {
        $this->user = $user;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale() {

        return $this->locale = locale_get_default();
    }

    /**
     * {@inheritdoc}
     */
    public function addLayer($layers) {
        $this->layers[] = $layers;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayers($layers) {
        $this->layers = $layers;
    }

    /**
     * {@inheritdoc}
     */
    public function removeLayer($layers) {
        $this->layers->removeElement($layers);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayers() {
        return $this->layers;
    }

}
