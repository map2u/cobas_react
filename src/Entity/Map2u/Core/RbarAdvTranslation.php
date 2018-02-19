<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreRbarAdvTranslation
 *
 * @ORM\Table(name="map2u_core__rbar_adv_translation", uniqueConstraints={@ORM\UniqueConstraint(name="map2u_core__rbar_adv_translation_unique_translation", columns={"translatable_id", "locale"})}, indexes={@ORM\Index(name="idx_781e132a2c2ac5d3", columns={"translatable_id"})})
 * @ORM\Entity
 */
class RbarAdvTranslation
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
     * @ORM\Column(name="title", type="string", length=512, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=false)
     */
    private $locale;

    /**
     * @var \App\Entity\Map2u\Core\RbarAdv
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\RbarAdv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="translatable_id", referencedColumnName="id")
     * })
     */
    private $translatable;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function getTranslatable(): \App\Entity\Map2u\Core\RbarAdv {
        return $this->translatable;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
    }

    public function setTranslatable(\App\Entity\Map2u\Core\RbarAdv $translatable) {
        $this->translatable = $translatable;
    }


}
