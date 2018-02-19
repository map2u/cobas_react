<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreReports
 *
 * @ORM\Table(name="map2u_core_reports")
 * @ORM\Entity
 */
class Report {

    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var guid
     *
     * @ORM\Column(name="user_id", type="guid", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionid", type="string", length=255, nullable=false)
     */
    private $sessionid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="report_title", type="string", length=255, nullable=false)
     */
    private $reportTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="report_type", type="string", length=255, nullable=false)
     */
    private $reportType;

    public function getId(): guid {
        return $this->id;
    }

    public function getUserId(): guid {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function getSessionid() {
        return $this->sessionid;
    }

    public function getDeleted() {
        return $this->deleted;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getReportTitle() {
        return $this->reportTitle;
    }

    public function getReportType() {
        return $this->reportType;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setUserId(guid $userId) {
        $this->userId = $userId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSessionid($sessionid) {
        $this->sessionid = $sessionid;
    }

    public function setDeleted($deleted) {
        $this->deleted = $deleted;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setReportTitle($reportTitle) {
        $this->reportTitle = $reportTitle;
    }

    public function setReportType($reportType) {
        $this->reportType = $reportType;
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
