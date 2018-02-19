<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationMessage
 *
 * @ORM\Table(name="notification__message", indexes={@ORM\Index(name="idx_state", columns={"state"}), @ORM\Index(name="idx_created_at", columns={"created_at"})})
 * @ORM\Entity
 */
class NotificationMessage {

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
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var json
     *
     * @ORM\Column(name="body", type="json", nullable=false)
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="restart_count", type="integer", nullable=true)
     */
    private $restartCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="started_at", type="datetime", nullable=true)
     */
    private $startedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="completed_at", type="datetime", nullable=true)
     */
    private $completedAt;

    public function getId() {
        return $this->id;
    }

    public function getType() {
        return $this->type;
    }

    public function getBody(): json {
        return $this->body;
    }

    public function getState() {
        return $this->state;
    }

    public function getRestartCount() {
        return $this->restartCount;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getStartedAt(): \DateTime {
        return $this->startedAt;
    }

    public function getCompletedAt(): \DateTime {
        return $this->completedAt;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setBody(json $body) {
        $this->body = $body;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setRestartCount($restartCount) {
        $this->restartCount = $restartCount;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setStartedAt(\DateTime $startedAt) {
        $this->startedAt = $startedAt;
    }

    public function setCompletedAt(\DateTime $completedAt) {
        $this->completedAt = $completedAt;
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
