<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaMedia
 *
 * @ORM\Table(name="media__media", indexes={@ORM\Index(name="idx_5c6dd74e12469de2", columns={"category_id"})})
 * @ORM\Entity
 */
class MediaMedia {

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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_name", type="string", length=255, nullable=false)
     */
    private $providerName;

    /**
     * @var integer
     *
     * @ORM\Column(name="provider_status", type="integer", nullable=false)
     */
    private $providerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_reference", type="string", length=255, nullable=false)
     */
    private $providerReference;

    /**
     * @var json
     *
     * @ORM\Column(name="provider_metadata", type="json", nullable=true)
     */
    private $providerMetadata;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type", type="string", length=255, nullable=true)
     */
    private $contentType;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_size", type="integer", nullable=true)
     */
    private $contentSize;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="string", length=255, nullable=true)
     */
    private $copyright;

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string", length=255, nullable=true)
     */
    private $authorName;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=64, nullable=true)
     */
    private $context;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cdn_is_flushable", type="boolean", nullable=true)
     */
    private $cdnIsFlushable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cdn_flush_at", type="datetime", nullable=true)
     */
    private $cdnFlushAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="cdn_status", type="integer", nullable=true)
     */
    private $cdnStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="cdn_flush_identifier", type="string", length=64, nullable=true)
     */
    private $cdnFlushIdentifier;

    /**
     * @var \ClassificationCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassificationCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getProviderName() {
        return $this->providerName;
    }

    public function getProviderStatus() {
        return $this->providerStatus;
    }

    public function getProviderReference() {
        return $this->providerReference;
    }

    public function getProviderMetadata(): json {
        return $this->providerMetadata;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getLength() {
        return $this->length;
    }

    public function getContentType() {
        return $this->contentType;
    }

    public function getContentSize() {
        return $this->contentSize;
    }

    public function getCopyright() {
        return $this->copyright;
    }

    public function getAuthorName() {
        return $this->authorName;
    }

    public function getContext() {
        return $this->context;
    }

    public function getCdnIsFlushable() {
        return $this->cdnIsFlushable;
    }

    public function getCdnFlushAt(): \DateTime {
        return $this->cdnFlushAt;
    }

    public function getCdnStatus() {
        return $this->cdnStatus;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getCdnFlushIdentifier() {
        return $this->cdnFlushIdentifier;
    }

    public function getCategory(): \ClassificationCategory {
        return $this->category;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setProviderName($providerName) {
        $this->providerName = $providerName;
    }

    public function setProviderStatus($providerStatus) {
        $this->providerStatus = $providerStatus;
    }

    public function setProviderReference($providerReference) {
        $this->providerReference = $providerReference;
    }

    public function setProviderMetadata(json $providerMetadata) {
        $this->providerMetadata = $providerMetadata;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function setContentType($contentType) {
        $this->contentType = $contentType;
    }

    public function setContentSize($contentSize) {
        $this->contentSize = $contentSize;
    }

    public function setCopyright($copyright) {
        $this->copyright = $copyright;
    }

    public function setAuthorName($authorName) {
        $this->authorName = $authorName;
    }

    public function setContext($context) {
        $this->context = $context;
    }

    public function setCdnIsFlushable($cdnIsFlushable) {
        $this->cdnIsFlushable = $cdnIsFlushable;
    }

    public function setCdnFlushAt(\DateTime $cdnFlushAt) {
        $this->cdnFlushAt = $cdnFlushAt;
    }

    public function setCdnStatus($cdnStatus) {
        $this->cdnStatus = $cdnStatus;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setCdnFlushIdentifier($cdnFlushIdentifier) {
        $this->cdnFlushIdentifier = $cdnFlushIdentifier;
    }

    public function setCategory(\ClassificationCategory $category) {
        $this->category = $category;
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
