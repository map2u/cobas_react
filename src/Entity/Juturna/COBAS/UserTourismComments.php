<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTourismComments
 *
 * @ORM\Table(name="user_tourism_comments", indexes={@ORM\Index(name="idx_595e4ec0c170aa66", columns={"tourism_id"}), @ORM\Index(name="idx_595e4ec0a76ed395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserTourismComments
{
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=25, nullable=true)
     */
    private $code;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=true)
     */
    private $isPublished;

    /**
     * @var string
     *
     * @ORM\Column(name="content_formatter", type="text", nullable=true)
     */
    private $contentFormatter;

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
     * @ORM\Column(name="raw_content", type="text", nullable=true)
     */
    private $rawContent;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \UserTourism
     *
     * @ORM\ManyToOne(targetEntity="UserTourism")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tourism_id", referencedColumnName="id")
     * })
     */
    private $tourism;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getCode() {
        return $this->code;
    }

    public function getIsPublished() {
        return $this->isPublished;
    }

    public function getContentFormatter() {
        return $this->contentFormatter;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getRawContent() {
        return $this->rawContent;
    }

    public function getContent() {
        return $this->content;
    }

    public function getUser(): \App\Entity\Map2u\Core\User {
        return $this->user;
    }

    public function getTourism(): \UserTourism {
        return $this->tourism;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setIsPublished($isPublished) {
        $this->isPublished = $isPublished;
    }

    public function setContentFormatter($contentFormatter) {
        $this->contentFormatter = $contentFormatter;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setRawContent($rawContent) {
        $this->rawContent = $rawContent;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setUser(\App\Entity\Map2u\Core\User $user) {
        $this->user = $user;
    }

    public function setTourism(\UserTourism $tourism) {
        $this->tourism = $tourism;
    }


}
