<?php

namespace Map2u\CoreBundle\Model;

/**
 * ProjectInterface
 */
interface ProjectInterface {

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId();

    /**
     * set id
     *
     * @return mixed 
     */
    public function setId($id);

    /**
     * Set userId
     *
     * @param guid $userId
     * @return mixed
     */
    public function setUserId($userId);

    /**
     * Get userId
     *
     * @return guid 
     */
    public function getUserId();

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

  
    /**
     * Set sessionid
     *
     * @param string $sessionid
     * @return mixed
     */
    public function setSessionid($sessionid);

    /**
     * Get sessionid
     *
     * @return string 
     */
    public function getSessionid();

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return mixed
     */
    public function setDeleted($deleted);

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted();

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return mixed
     */
    public function setCreatedAt($createdAt);

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt();

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return mixed
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt();

    /**
     * Set description
     *
     * @param string $description
     * @return mixed
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return mixed
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null);

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser();

    /**
     * Add tags
     *
     * @param \Map2u\CoreBundle\Entity\Tag $tags
     * @return mixed
     */
    public function addTag(\Map2u\CoreBundle\Entity\Tag $tags);

    /**
     * Remove tags
     *
     * @param \Map2u\CoreBundle\Entity\Tag $tags
     */
    public function removeTag(\Map2u\CoreBundle\Entity\Tag $tags);

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags();

    /**
     * Add categories
     *
     * @param \Map2u\CoreBundle\Entity\Category $categories
     * @return mixed
     */
    public function addCategory(\Map2u\CoreBundle\Entity\Category $categories);

    /**
     * Remove categories
     *
     * @param \Map2u\CoreBundle\Entity\Category $categories
     */
    public function removeCategory(\Map2u\CoreBundle\Entity\Category $categories);

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories();

    /**
     * Set contacts
     *
     * @param string $contacts
     * @return mixed
     */
    public function setContacts($contacts);

    /**
     * Get contacts
     *
     * @return string 
     */
    public function getContacts();

    /**
     * Add reports
     *
     * @param \Map2u\CoreBundle\Entity\Report $reports
     * @return mixed
     */
    public function addReport(\Map2u\CoreBundle\Entity\Report $reports);

    /**
     * Remove reports
     *
     * @param \Map2u\CoreBundle\Entity\Report $reports
     */
    public function removeReport(\Map2u\CoreBundle\Entity\Report $reports);

    /**
     * Get reports
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReports();
}
