<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreStateTranslation
 *
 * @ORM\Table(name="map2u_core__state_translation", uniqueConstraints={@ORM\UniqueConstraint(name="map2u_core__state_translation_unique_translation", columns={"translatable_id", "locale"})}, indexes={@ORM\Index(name="idx_429657bb2c2ac5d3", columns={"translatable_id"})})
 * @ORM\Entity
 */
class StateTranslation
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=false)
     */
    private $locale;

    /**
     * @var \App\Entity\Map2u\Core\State
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="translatable_id", referencedColumnName="id")
     * })
     */
    private $translatable;

    public function getId(): guid {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function getTranslatable(): \App\Entity\Map2u\Core\State {
        return $this->translatable;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
    }

    public function setTranslatable(\App\Entity\Map2u\Core\State $translatable) {
        $this->translatable = $translatable;
    }


}
