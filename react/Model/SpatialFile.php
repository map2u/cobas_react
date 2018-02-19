<?php

namespace Map2u\CoreBundle\Model;

use Map2u\CoreBundle\Model\SpatialFileInterface;

/**
 * SpatialFile
 */
abstract class SpatialFile implements SpatialFileInterface {

    protected $id;
    protected $userId;
    protected $user;
    protected $sessionId;
    protected $name;
    protected $pcField;
    protected $valueField;
    protected $pcCount;
    protected $recordCount;
    protected $fileName;
    protected $sheetName;
    protected $public;
    protected $geomtype;
    protected $fileType; // supported file type 1. shapefile, 2 text file, 3 
    protected $supportType;
    protected $fieldList;
    protected $selectedFields;
    protected $description;
    protected $createdAt;
    protected $updatedAt;
    protected $tags;
    protected $categories;

    /**
     * Constructor
     */
    public function __construct() {

        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get geomtype
     *
     * @return string 
     */
    public function getGeomtype() {
        return $this->geomtype;
    }

    /**
     * Set geomtype
     *
     * @param string $geomtype
     * @return mixed
     */
    public function setGeomtype($geomtype) {
        $this->geomtype = $geomtype;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPcField($pcField) {
        $this->pcField = $pcField;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPcField() {
        return $this->pcField;
    }

    /**
     * {@inheritdoc}
     */
    public function setValueField($valueField) {
        $this->valueField = $valueField;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getValueField() {
        return $this->valueField;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set pcCount
     *
     * @param integer $pcCount
     * @return mixed
     */
    public function setPcCount($pcCount) {
        $this->pcCount = $pcCount;

        return $this;
    }

    /**
     * Get pcCount
     *
     * @return integer 
     */
    public function getPcCount() {
        return $this->pcCount;
    }

    /**
     * Set recordCount
     *
     * @param integer $recordCount
     * @return mixed
     */
    public function setRecordCount($recordCount) {
        $this->recordCount = $recordCount;

        return $this;
    }

    /**
     * Get recordCount
     *
     * @return integer 
     */
    public function getRecordCount() {
        return $this->recordCount;
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
    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionId() {
        return $this->sessionId;
    }

    /**
     * {@inheritdoc}
     */
    public function setFileName($fileName) {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFileName() {
        return $this->fileName;
    }

    /**
     * {@inheritdoc}
     */
    public function setSheetName($sheetName) {
        $this->sheetName = $sheetName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSheetName() {
        return $this->sheetName;
    }

    /**
     * {@inheritdoc}
     */
    public function setLabelField($labelField) {
        $this->labelField = $labelField;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLabelField() {
        return $this->labelField;
    }

    /**
     * {@inheritdoc}
     */
    public function setTipField($tipField) {
        $this->tipField = $tipField;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTipField() {
        return $this->tipField;
    }

    /**
     * {@inheritdoc}
     */
    public function setTipPercentage($tipPercentage) {
        $this->tipPercentage = $tipPercentage;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTipPercentage() {
        return $this->tipPercentage;
    }

    /**
     * {@inheritdoc}
     */
    public function setTipTimes100($tipTimes100) {
        $this->tipTimes100 = $tipTimes100;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTipTimes100() {
        return $this->tipTimes100;
    }

    /**
     * {@inheritdoc}
     */
    public function setTipNumber($tipNumber) {
        $this->tipNumber = $tipNumber;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTipNumber() {
        return $this->tipNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setGeomFieldName($geomFieldName) {
        $this->geomFieldName = $geomFieldName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGeomFieldName() {
        return $this->geomFieldName;
    }

    /**
     * {@inheritdoc}
     */
    public function setSldFileName($sldFileName) {
        $this->sldFileName = $sldFileName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSldFileName() {
        return $this->sldFileName;
    }

    /**
     * {@inheritdoc}
     */
    public function setStyle($style) {
        $this->Style = $style;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStyle() {
        return $this->Style;
    }

    /**
     * {@inheritdoc}
     */
    public function setPublic($public) {
        $this->public = $public;

        return $this;
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
    public function setFileType($fileType) {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFileType() {
        return $this->fileType;
    }

    /**
     * {@inheritdoc}
     */
    public function setSupportType($supportType) {
        $this->supportType = $supportType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportType() {
        return $this->supportType;
    }

    /**
     * {@inheritdoc}
     */
    public function setFieldList($fieldList) {
        $this->fieldList = $fieldList;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldList() {
        return $this->fieldList;
    }

    /**
     * {@inheritdoc}
     */
    public function setSelectedFields($selectedFields) {
        $this->selectedFields = $selectedFields;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectedFields() {
        return $this->selectedFields;
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

    public function prePersist() {
        $this->setCreatedAt(new \DateTime);
        $this->setUpdatedAt(new \DateTime);
    }

    public function preUpdate() {
        $this->setUpdatedAt(new \DateTime);
    }

    public function saveUploadSpatialFiles() {
        
    }

    public function __toString() {
        if ($this->fileName === null) {
            return 'No file name';
        } else {
            return $this->fileName;
        }
    }

}
