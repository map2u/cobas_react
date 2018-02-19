<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreStoryTranslation
 *
 * @ORM\Table(name="map2u_core__story_translation", uniqueConstraints={@ORM\UniqueConstraint(name="map2u_core__story_translation_unique_translation", columns={"translatable_id", "locale"})}, indexes={@ORM\Index(name="idx_799a1b592c2ac5d3", columns={"translatable_id"})})
 * @ORM\Entity
 */
class StoryTranslation
{
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
     * @ORM\Column(name="story_name", type="string", length=255, nullable=false)
     */
    private $storyName;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=false)
     */
    private $locale;

    /**
     * @var \App\Entity\Map2u\Core\Story
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\Story")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="translatable_id", referencedColumnName="id")
     * })
     */
    private $translatable;

    public function getId(): guid {
        return $this->id;
    }

    public function getStoryName() {
        return $this->storyName;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function getTranslatable(): \App\Entity\Map2u\Core\Story {
        return $this->translatable;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setStoryName($storyName) {
        $this->storyName = $storyName;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
    }

    public function setTranslatable(\App\Entity\Map2u\Core\Story $translatable) {
        $this->translatable = $translatable;
    }


}
