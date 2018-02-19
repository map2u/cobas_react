<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreLayerGeom
 *
 * @ORM\Table(name="map2u_core_layer_geom", indexes={@ORM\Index(name="idx_3fac642aea6efdcd", columns={"layer_id"})})
 * @ORM\Entity
 */
class LayerGeom
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
     * @ORM\Column(name="table_name", type="string", length=255, nullable=false)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255, nullable=false)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="properties", type="string", length=255, nullable=false)
     */
    private $properties;

    /**
     * @var \App\Entity\Map2u\Core\Layer
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\Layer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="layer_id", referencedColumnName="id")
     * })
     */
    private $layer;

    public function getId(): guid {
        return $this->id;
    }

    public function getTableName() {
        return $this->tableName;
    }

    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

    public function getStyle() {
        return $this->style;
    }

    public function getProperties() {
        return $this->properties;
    }

    public function getLayer(): \App\Entity\Map2u\Core\Layer {
        return $this->layer;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setTableName($tableName) {
        $this->tableName = $tableName;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function setProperties($properties) {
        $this->properties = $properties;
    }

    public function setLayer(\App\Entity\Map2u\Core\Layer $layer) {
        $this->layer = $layer;
    }


}
