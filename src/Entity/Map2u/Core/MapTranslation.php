<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreMapTranslation
 *
 * @ORM\Table(name="map2u_core__map_translation", uniqueConstraints={@ORM\UniqueConstraint(name="map2u_core__map_translation_unique_translation", columns={"translatable_id", "locale"})}, indexes={@ORM\Index(name="idx_46787eaf2c2ac5d3", columns={"translatable_id"})})
 * @ORM\Entity
 */
class MapTranslation
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
     * @ORM\Column(name="map_title", type="string", length=250, nullable=false)
     */
    private $mapTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=false)
     */
    private $locale;

    /**
     * @var \App\Entity\Map2u\Core\Map
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\Map")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="translatable_id", referencedColumnName="id")
     * })
     */
    private $translatable;

    public function getId(): guid {
        return $this->id;
    }

    public function getMapTitle() {
        return $this->mapTitle;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function getTranslatable(): \App\Entity\Map2u\Core\Map {
        return $this->translatable;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setMapTitle($mapTitle) {
        $this->mapTitle = $mapTitle;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
    }

    public function setTranslatable(\App\Entity\Map2u\Core\Map $translatable) {
        $this->translatable = $translatable;
    }


}
