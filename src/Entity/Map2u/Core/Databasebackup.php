<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Databasebackup
 *
 * @ORM\Table(name="databasebackup", indexes={@ORM\Index(name="idx_cad04dc9a76ed395", columns={"user_id"})})
 * @ORM\Entity
 */
class Databasebackup {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="foldername", type="string", length=255, nullable=true)
     */
    private $foldername;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="backup_at", type="datetime", nullable=true)
     */
    private $backupAt;

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
     * @var \DateTime
     *
     * @ORM\Column(name="finished_at", type="datetime", nullable=false)
     */
    private $finishedAt;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId() {
        return $this->id;
    }

    public function getFilename() {
        return $this->filename;
    }

    public function getFoldername() {
        return $this->foldername;
    }

    public function getBackupAt() {
        return $this->backupAt;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function getFinishedAt() {
        return $this->finishedAt;
    }

    public function getUser(): \App\Entity\Map2u\Core\User {
        return $this->user;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFilename($filename) {
        $this->filename = $filename;
    }

    public function setFoldername($foldername) {
        $this->foldername = $foldername;
    }

    public function setBackupAt(\DateTime $backupAt) {
        $this->backupAt = $backupAt;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setFinishedAt(\DateTime $finishedAt) {
        $this->finishedAt = $finishedAt;
    }

    public function setUser(\App\Entity\Map2u\Core\User $user) {
        $this->user = $user;
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
