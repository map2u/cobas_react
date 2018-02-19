<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreSpatialfile
 *
 * @ORM\Table(name="map2u_core__spatialfile", indexes={@ORM\Index(name="idx_8bde9ababfe1c6f", columns={"user_uuid"})})
 * @ORM\Entity
 */
class Spatialfile {

    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=250, nullable=true)
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
     * @ORM\Column(name="sheet_name", type="string", length=250, nullable=true)
     */
    private $sheetName;

    /**
     * @var string
     *
     * @ORM\Column(name="geomtype", type="string", length=50, nullable=true)
     */
    private $geomtype;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pc_field", type="string", length=250, nullable=true)
     */
    private $pcField;

    /**
     * @var integer
     *
     * @ORM\Column(name="pc_count", type="integer", nullable=true)
     */
    private $pcCount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_public", type="boolean", nullable=true)
     */
    private $bPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="file_type", type="string", length=255, nullable=true)
     */
    private $fileType;

    /**
     * @var string
     *
     * @ORM\Column(name="support_type", type="string", length=255, nullable=true)
     */
    private $supportType;

    /**
     * @var string
     *
     * @ORM\Column(name="field_list", type="text", nullable=true)
     */
    private $fieldList;

    /**
     * @var string
     *
     * @ORM\Column(name="selected_fields", type="text", nullable=true)
     */
    private $selectedFields;

    /**
     * @var string
     *
     * @ORM\Column(name="value_field", type="string", length=250, nullable=true)
     */
    private $valueField;

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
     * @var integer
     *
     * @ORM\Column(name="record_count", type="integer", nullable=true)
     */
    private $recordCount;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_uuid", referencedColumnName="id")
     * })
     */
    private $userUuid;

    public function getId(): guid {
        return $this->id;
    }

    public function getSessionId() {
        return $this->sessionId;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function getSheetName() {
        return $this->sheetName;
    }

    public function getGeomtype() {
        return $this->geomtype;
    }

    public function getName() {
        return $this->name;
    }

    public function getPcField() {
        return $this->pcField;
    }

    public function getPcCount() {
        return $this->pcCount;
    }

    public function getBPublic() {
        return $this->bPublic;
    }

    public function getFileType() {
        return $this->fileType;
    }

    public function getSupportType() {
        return $this->supportType;
    }

    public function getFieldList() {
        return $this->fieldList;
    }

    public function getSelectedFields() {
        return $this->selectedFields;
    }

    public function getValueField() {
        return $this->valueField;
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

    public function getRecordCount() {
        return $this->recordCount;
    }

    public function getUserUuid(): \App\Entity\Map2u\Core\User {
        return $this->userUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function setSheetName($sheetName) {
        $this->sheetName = $sheetName;
    }

    public function setGeomtype($geomtype) {
        $this->geomtype = $geomtype;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPcField($pcField) {
        $this->pcField = $pcField;
    }

    public function setPcCount($pcCount) {
        $this->pcCount = $pcCount;
    }

    public function setBPublic($bPublic) {
        $this->bPublic = $bPublic;
    }

    public function setFileType($fileType) {
        $this->fileType = $fileType;
    }

    public function setSupportType($supportType) {
        $this->supportType = $supportType;
    }

    public function setFieldList($fieldList) {
        $this->fieldList = $fieldList;
    }

    public function setSelectedFields($selectedFields) {
        $this->selectedFields = $selectedFields;
    }

    public function setValueField($valueField) {
        $this->valueField = $valueField;
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

    public function setRecordCount($recordCount) {
        $this->recordCount = $recordCount;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
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
