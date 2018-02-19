<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Useruploadfile
 *
 * @ORM\Table(name="useruploadfile", indexes={@ORM\Index(name="idx_b64ea400a76ed395", columns={"old_old_old_user_id"})})
 * @ORM\Entity
 */
class UserUploadfile {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
      */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="old_old_old_user_id", type="integer", nullable=false)
     */
    private $oldOldOldUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=50, nullable=true)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=250, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="geomtable_name", type="string", length=250, nullable=true)
     */
    private $geomtableName;

    /**
     * @var string
     *
     * @ORM\Column(name="geomfield_name", type="string", length=250, nullable=true)
     */
    private $geomfieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="topojsonfile_name", type="string", length=250, nullable=true)
     */
    private $topojsonfileName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_public", type="boolean", nullable=true)
     */
    private $bPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="projection", type="string", length=255, nullable=true)
     */
    private $projection;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="label_field", type="string", length=250, nullable=true)
     */
    private $labelField;

    /**
     * @var string
     *
     * @ORM\Column(name="tip_field", type="string", length=250, nullable=true)
     */
    private $tipField;

    /**
     * @var string
     *
     * @ORM\Column(name="sldfile_name", type="string", length=250, nullable=true)
     */
    private $sldfileName;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="field_list", type="text", nullable=true)
     */
    private $fieldList;

    /**
     * @var string
     *
     * @ORM\Column(name="thematicmap_style", type="text", nullable=true)
     */
    private $thematicmapStyle;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $typeId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tip_percentage", type="boolean", nullable=true)
     */
    private $tipPercentage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tip_times100", type="boolean", nullable=true)
     */
    private $tipTimes100;

    /**
     * @var integer
     *
     * @ORM\Column(name="tip_number", type="integer", nullable=true)
     */
    private $tipNumber;

    /**
     * @var guid
     *
     * @ORM\Column(name="user_id", type="guid", nullable=true)
     */
    private $userId;

    /**
     * @var guid
     *
     * @ORM\Column(name="old_user_id", type="guid", nullable=true)
     */
    private $oldUserId;

    /**
     * @var guid
     *
     * @ORM\Column(name="old_old_user_id", type="guid", nullable=true)
     */
    private $oldOldUserId;

    public function getId() {
        return $this->id;
    }

    public function getOldOldOldUserId() {
        return $this->oldOldOldUserId;
    }

    public function getSessionId() {
        return $this->sessionId;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function getGeomtableName() {
        return $this->geomtableName;
    }

    public function getGeomfieldName() {
        return $this->geomfieldName;
    }

    public function getTopojsonfileName() {
        return $this->topojsonfileName;
    }

    public function getBPublic() {
        return $this->bPublic;
    }

    public function getProjection() {
        return $this->projection;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getLabelField() {
        return $this->labelField;
    }

    public function getTipField() {
        return $this->tipField;
    }

    public function getSldfileName() {
        return $this->sldfileName;
    }

    public function getType() {
        return $this->type;
    }

    public function getFieldList() {
        return $this->fieldList;
    }

    public function getThematicmapStyle() {
        return $this->thematicmapStyle;
    }

    public function getTypeId() {
        return $this->typeId;
    }

    public function getTipPercentage() {
        return $this->tipPercentage;
    }

    public function getTipTimes100() {
        return $this->tipTimes100;
    }

    public function getTipNumber() {
        return $this->tipNumber;
    }

    public function getUserId(): guid {
        return $this->userId;
    }

    public function getOldUserId(): guid {
        return $this->oldUserId;
    }

    public function getOldOldUserId(): guid {
        return $this->oldOldUserId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setOldOldOldUserId($oldOldOldUserId) {
        $this->oldOldOldUserId = $oldOldOldUserId;
    }

    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function setGeomtableName($geomtableName) {
        $this->geomtableName = $geomtableName;
    }

    public function setGeomfieldName($geomfieldName) {
        $this->geomfieldName = $geomfieldName;
    }

    public function setTopojsonfileName($topojsonfileName) {
        $this->topojsonfileName = $topojsonfileName;
    }

    public function setBPublic($bPublic) {
        $this->bPublic = $bPublic;
    }

    public function setProjection($projection) {
        $this->projection = $projection;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setLabelField($labelField) {
        $this->labelField = $labelField;
    }

    public function setTipField($tipField) {
        $this->tipField = $tipField;
    }

    public function setSldfileName($sldfileName) {
        $this->sldfileName = $sldfileName;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setFieldList($fieldList) {
        $this->fieldList = $fieldList;
    }

    public function setThematicmapStyle($thematicmapStyle) {
        $this->thematicmapStyle = $thematicmapStyle;
    }

    public function setTypeId($typeId) {
        $this->typeId = $typeId;
    }

    public function setTipPercentage($tipPercentage) {
        $this->tipPercentage = $tipPercentage;
    }

    public function setTipTimes100($tipTimes100) {
        $this->tipTimes100 = $tipTimes100;
    }

    public function setTipNumber($tipNumber) {
        $this->tipNumber = $tipNumber;
    }

    public function setUserId(guid $userId) {
        $this->userId = $userId;
    }

    public function setOldUserId(guid $oldUserId) {
        $this->oldUserId = $oldUserId;
    }

    public function setOldOldUserId(guid $oldOldUserId) {
        $this->oldOldUserId = $oldOldUserId;
    }

    /**
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps() {
        $this->setUpdatedAt(new \DateTime('now'));

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }

}
