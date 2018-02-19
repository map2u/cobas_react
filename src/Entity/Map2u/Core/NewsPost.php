<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsPost
 *
 * @ORM\Table(name="news__post", indexes={@ORM\Index(name="idx_7d109bc8514956fd", columns={"collection_id"}), @ORM\Index(name="idx_7d109bc83da5256d", columns={"image_id"}), @ORM\Index(name="idx_7d109bc8f675f31b", columns={"author_id"})})
 * @ORM\Entity
 */
class NewsPost {

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
     * @ORM\Column(name="abstract", type="text", nullable=false)
     */
    private $abstract;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="raw_content", type="text", nullable=false)
     */
    private $rawContent;

    /**
     * @var string
     *
     * @ORM\Column(name="content_formatter", type="string", length=255, nullable=false)
     */
    private $contentFormatter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication_date_start", type="datetime", nullable=true)
     */
    private $publicationDateStart;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comments_enabled", type="boolean", nullable=false)
     */
    private $commentsEnabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comments_close_at", type="datetime", nullable=true)
     */
    private $commentsCloseAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="comments_default_status", type="integer", nullable=false)
     */
    private $commentsDefaultStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="comments_count", type="integer", nullable=true)
     */
    private $commentsCount;

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
     * @var \MediaMedia
     *
     * @ORM\ManyToOne(targetEntity="MediaMedia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     * })
     */
    private $image;

    /**
     * @var \ClassificationCollection
     *
     * @ORM\ManyToOne(targetEntity="ClassificationCollection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="collection_id", referencedColumnName="id")
     * })
     */
    private $collection;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * })
     */
    private $author;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ClassificationTag", inversedBy="post")
     * @ORM\JoinTable(name="news__post_tag",
     *   joinColumns={
     *     @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tag;

    /**
     * Constructor
     */
    public function __construct() {
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAbstract() {
        return $this->abstract;
    }

    public function getContent() {
        return $this->content;
    }

    public function getRawContent() {
        return $this->rawContent;
    }

    public function getContentFormatter() {
        return $this->contentFormatter;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getPublicationDateStart(): \DateTime {
        return $this->publicationDateStart;
    }

    public function getCommentsEnabled() {
        return $this->commentsEnabled;
    }

    public function getCommentsCloseAt(): \DateTime {
        return $this->commentsCloseAt;
    }

    public function getCommentsDefaultStatus() {
        return $this->commentsDefaultStatus;
    }

    public function getCommentsCount() {
        return $this->commentsCount;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getImage(): \MediaMedia {
        return $this->image;
    }

    public function getCollection(): \ClassificationCollection {
        return $this->collection;
    }

    public function getAuthor(): \App\Entity\Map2u\Core\User {
        return $this->author;
    }

    public function getTag(): \Doctrine\Common\Collections\Collection {
        return $this->tag;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAbstract($abstract) {
        $this->abstract = $abstract;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setRawContent($rawContent) {
        $this->rawContent = $rawContent;
    }

    public function setContentFormatter($contentFormatter) {
        $this->contentFormatter = $contentFormatter;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function setPublicationDateStart(\DateTime $publicationDateStart) {
        $this->publicationDateStart = $publicationDateStart;
    }

    public function setCommentsEnabled($commentsEnabled) {
        $this->commentsEnabled = $commentsEnabled;
    }

    public function setCommentsCloseAt(\DateTime $commentsCloseAt) {
        $this->commentsCloseAt = $commentsCloseAt;
    }

    public function setCommentsDefaultStatus($commentsDefaultStatus) {
        $this->commentsDefaultStatus = $commentsDefaultStatus;
    }

    public function setCommentsCount($commentsCount) {
        $this->commentsCount = $commentsCount;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setImage(\MediaMedia $image) {
        $this->image = $image;
    }

    public function setCollection(\ClassificationCollection $collection) {
        $this->collection = $collection;
    }

    public function setAuthor(\App\Entity\Map2u\Core\User $author) {
        $this->author = $author;
    }

    public function setTag(\Doctrine\Common\Collections\Collection $tag) {
        $this->tag = $tag;
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
