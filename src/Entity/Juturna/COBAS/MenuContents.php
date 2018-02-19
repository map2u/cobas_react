<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuContents
 *
 * @ORM\Table(name="menu_contents", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_98ab54e1966c8e48", columns={"menu_name"})})
 * @ORM\Entity
 */
class MenuContents
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
     * @ORM\Column(name="title_es", type="string", length=255, nullable=true)
     */
    private $titleEs;

    /**
     * @var string
     *
     * @ORM\Column(name="title_link", type="string", length=255, nullable=true)
     */
    private $titleLink;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_name", type="string", length=255, nullable=false)
     */
    private $menuName;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="content_es", type="text", nullable=true)
     */
    private $contentEs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getTitleEs() {
        return $this->titleEs;
    }

    public function getTitleLink() {
        return $this->titleLink;
    }

    public function getMenuName() {
        return $this->menuName;
    }

    public function getContent() {
        return $this->content;
    }

    public function getContentEs() {
        return $this->contentEs;
    }

    public function getEnabled() {
        return $this->enabled;
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

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setTitleEs($titleEs) {
        $this->titleEs = $titleEs;
    }

    public function setTitleLink($titleLink) {
        $this->titleLink = $titleLink;
    }

    public function setMenuName($menuName) {
        $this->menuName = $menuName;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setContentEs($contentEs) {
        $this->contentEs = $contentEs;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
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


}
