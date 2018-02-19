<?php

namespace Map2u\CoreBundle\Model;

/**
 * ReportInterface
 */
interface ReportInterface {

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId();

    /**
     * Set id
     *
     * @param guid $id
     * @return Report
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
     * @return Report
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
     * @return Report
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
     * @return Report
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
     * @return Report
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
     * Set project
     *
     * @param \Map2u\CoreBundle\Entity\Project $project
     * @return mixed
     */
    public function setProject(\Map2u\CoreBundle\Entity\Project $project = null);

    /**
     * Get project
     *
     * @return \Map2u\CoreBundle\Entity\Project 
     */
    public function getProject();

 
    /**
     * Set reportTitle
     *
     * @param string $reportTitle
     * @return mixed
     */
    public function setReportTitle($reportTitle);

    /**
     * Get reportTitle
     *
     * @return string 
     */
    public function getReportTitle();

    /**
     * Set reportType
     *
     * @param string $reportType
     * @return mixed
     */
    public function setReportType($reportType);

    /**
     * Get reportType
     *
     * @return string 
     */
    public function getReportType();
}
