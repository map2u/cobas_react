<?php

namespace Map2u\CoreBundle\Model;

/**
 * SpatialFileInterface
 */
interface SpatialFileInterface {

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
     * Get geomtype
     *
     * @return string 
     */
    public function getGeomtype();

    /**
     * Set geomtype
     *
     * @param string $geomtype
     * @return mixed
     */
    public function setGeomtype($geomtype);

    /**
     * Get pcField
     *
     * @return string 
     */
    public function getPcField();

    /**
     * Set pcField
     *
     * @param string $pcField
     * @return mixed
     */
    public function setPcField($pcField);

    /**
     * Set valueField
     *
     * @param string $valueField
     * @return mixed
     */
    public function setValueField($valueField);

    /**
     * Get valueField
     *
     * @return string 
     */
    public function getValueField();

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
     * Set pcCount
     *
     * @param integer $pcCount
     * @return mixed
     */
    public function setPcCount($pcCount);

    /**
     * Get pcCount
     *
     * @return integer 
     */
    public function getPcCount();

    /**
     * Set recordCount
     *
     * @param integer $recordCount
     * @return mixed
     */
    public function setRecordCount($recordCount);

    /**
     * Get recordCount
     *
     * @return integer 
     */
    public function getRecordCount();

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
     * Set sessionId
     *
     * @param string $sessionId
     * @return mixed
     */
    public function setSessionId($sessionId);

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId();

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return mixed
     */
    public function setFileName($fileName);

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName();

    /**
     * Set sheetName
     *
     * @param string $sheetName
     * @return mixed
     */
    public function setSheetName($sheetName);

    /**
     * Get sheetName
     *
     * @return string 
     */
    public function getSheetName();

    /**
     * Set labelField
     *
     * @param string $labelField
     * @return mixed
     */
    public function setLabelField($labelField);

    /**
     * Get labelField
     *
     * @return string 
     */
    public function getLabelField();

    /**
     * Set tipField
     *
     * @param string $tipField
     * @return mixed
     */
    public function setTipField($tipField);

    /**
     * Get tipField
     *
     * @return string 
     */
    public function getTipField();

    /**
     * Set tipPercentage
     *
     * @param boolean $tipPercentage
     * @return mixed
     */
    public function setTipPercentage($tipPercentage);

    /**
     * Get tipPercentage
     *
     * @return boolean 
     */
    public function getTipPercentage();

    /**
     * Set tipTimes100
     *
     * @param boolean $tipTimes100
     * @return mixed
     */
    public function setTipTimes100($tipTimes100);

    /**
     * Get tipTimes100
     *
     * @return boolean 
     */
    public function getTipTimes100();

    /**
     * Set tipNumber
     *
     * @param integer $tipNumber
     * @return mixed
     */
    public function setTipNumber($tipNumber);

    /**
     * Get tipNumber
     *
     * @return integer 
     */
    public function getTipNumber();

    /**
     * Set geomFieldName
     *
     * @param string $geomFieldName
     * @return mixed
     */
    public function setGeomFieldName($geomFieldName);

    /**
     * Get geomFieldName
     *
     * @return string 
     */
    public function getGeomFieldName();

    /**
     * Set sldFileName
     *
     * @param string $sldFileName
     * @return mixed
     */
    public function setSldFileName($sldFileName);

    /**
     * Get sldFileName
     *
     * @return string 
     */
    public function getSldFileName();

    /**
     * Set Style
     *
     * @param string $style
     * @return mixed
     */
    public function setStyle($style);

    /**
     * Get Style
     *
     * @return string 
     */
    public function getStyle();

    /**
     * Set public
     *
     * @param boolean $public
     * @return mixed
     */
    public function setPublic($public);

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic();

    /**
     * Set fileType
     *
     * @param string $fileType
     * @return mixed
     */
    public function setFileType($fileType);

    /**
     * Get fileType
     *
     * @return string 
     */
    public function getFileType();

    /**
     * Set supportType
     *
     * @param string $supportType
     * @return mixed
     */
    public function setSupportType($supportType);

    /**
     * Get supportType
     *
     * @return string 
     */
    public function getSupportType();

    /**
     * Set fieldList
     *
     * @param string $fieldList
     * @return mixed
     */
    public function setFieldList($fieldList);

    /**
     * Get fieldList
     *
     * @return string 
     */
    public function getFieldList();

    /**
     * Set selectedFields
     *
     * @param string $selectedFields
     * @return mixed
     */
    public function setSelectedFields($selectedFields);

    /**
     * Get selectedFields
     *
     * @return string 
     */
    public function getSelectedFields();

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
}
