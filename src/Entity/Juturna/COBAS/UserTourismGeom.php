<?php

namespace App\Entity\Juturna\COBAS;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTourismGeoms
 *
 * @ORM\Table(name="user_tourism_geom", indexes={@ORM\Index(name="idx_42jufgba76ed395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserTourismGeom
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\SequenceGenerator(sequenceName="user_tourism_geom_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="label", type="string", length=125, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=125, nullable=true)
     */
    private $icon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enabled", type="boolean", nullable=true)
     */
    private $isEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=true)
     */
    private $isPublished;

    /**
     * @var geometry
     *
     * @ORM\Column(name="the_geom", type="geometry", nullable=true)
     */
    private $theGeom;

    /**
     * @var string
     *
     * @ORM\Column(name="geometry_type", type="string", length=255, nullable=true)
     */
    private $geometryType;

    /**
     * @var string
     *
     * @ORM\Column(name="radius", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="text", nullable=true)
     */
    private $style;

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

    public function getName() {
        return $this->name;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function getIsEnabled() {
        return $this->isEnabled;
    }

    public function getIsPublished() {
        return $this->isPublished;
    }

    public function getTheGeom(): geometry {
        return $this->theGeom;
    }

    public function getGeometryType() {
        return $this->geometryType;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getStyle() {
        return $this->style;
    }

    public function getUser(): \App\Entity\Map2u\Core\User {
        return $this->user;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
    }

    public function setIsEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }

    public function setIsPublished($isPublished) {
        $this->isPublished = $isPublished;
    }

    public function setTheGeom(geometry $theGeom) {
        $this->theGeom = $theGeom;
    }

    public function setGeometryType($geometryType) {
        $this->geometryType = $geometryType;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function setUser(\App\Entity\Map2u\Core\User $user) {
        $this->user = $user;
    }


}
