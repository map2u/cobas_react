<?php

namespace Map2u\CoreBundle\Model;

use Map2u\CoreBundle\Model\LayerGeomInterface;

/**
 * LayerGeom
 */
abstract class LayerGeom implements LayerGeomInterface {

    protected $id;
    protected $tableId;
    protected $tableName;
    protected $rowId;
    protected $layerId;
    protected $name;
    protected $value;
    protected $style;
    protected $theGeom;
    protected $properties;

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerId() {
        return $this->layerId;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerId($layerId) {
        $this->layerId = $layerId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * {@inheritdoc}
     */
    public function setStyle($style) {
        $this->style = $style;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setTableId($tableId) {
        $this->tableId = $tableId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTableId() {
        return $this->tableId;
    }

    /**
     * {@inheritdoc}
     */
    public function setRowId($rowId) {
        $this->rowId = $rowId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRowId() {
        return $this->rowId;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setTableName($tableName) {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTableName() {
        return $this->tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($value) {
        $this->value = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setProperties($properties) {
        $this->properties = $properties;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties() {
        return $this->properties;
    }

    /**
     * {@inheritdoc}
     */
    public function setTheGeom($theGeom) {
        $this->theGeom = $theGeom;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTheGeom() {
        return $this->theGeom;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayer() {
        
    }

    /**
     * {@inheritdoc}
     */
    public function getTheGeomType() {
        
    }

}
