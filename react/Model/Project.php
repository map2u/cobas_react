<?php

namespace Map2u\CoreBundle\Model;

use Map2u\CoreBundle\Model\ProjectInterface;

/**
 * Project
 */
abstract class Project implements ProjectInterface {

    protected $id;
    protected $userId;
    protected $name;
  
    protected $sessionid;
    protected $deleted;
    protected $createdAt;
    protected $updatedAt;
    protected $description;
    protected $user;
    protected $tags;
    protected $categories;
    protected $contacts;
    protected $reports;

    /**
     * Constructor
     */
    public function __construct() {

        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reports = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
        return $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name) {
        $this->name = $name;

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
    public function setSessionid($sessionid) {
        $this->sessionid = $sessionid;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionid() {
        return $this->sessionid;
    }

    /**
     * {@inheritdoc}
     */
    public function setDeleted($deleted) {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDeleted() {
        return $this->deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
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
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
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
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
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
    public function addTag(\Map2u\CoreBundle\Entity\Tag $tags) {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeTag(\Map2u\CoreBundle\Entity\Tag $tags) {
        $this->tags->removeElement($tags);
    }

    /**
     * {@inheritdoc}
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * {@inheritdoc}
     */
    public function addCategory(\Map2u\CoreBundle\Entity\Category $categories) {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeCategory(\Map2u\CoreBundle\Entity\Category $categories) {
        $this->categories->removeElement($categories);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * {@inheritdoc}
     */
    public function setContacts($contacts) {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getContacts() {
        return $this->contacts;
    }

    /**
     * {@inheritdoc}
     */
    public function addReport(\Map2u\CoreBundle\Entity\Report $reports) {
        $this->reports[] = $reports;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeReport(\Map2u\CoreBundle\Entity\Report $reports) {
        $this->reports->removeElement($reports);
    }

    /**
     * {@inheritdoc}
     */
    public function getReports() {
        return $this->reports;
    }

}
