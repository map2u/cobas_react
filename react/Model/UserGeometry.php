<?php

namespace Map2u\CoreBundle\Model;

abstract class UserGeometry implements UserGeometryInterface {

    protected $id;
    protected $userId;
    protected $user;
    protected $name;
    protected $markerIcon;
    protected $geomType;
    protected $buffer;
    protected $public;
    protected $description;
    protected $createdAt;
    protected $updatedAt;
    protected $style;
    protected $center;
    protected $radius;
    protected $theGeom;

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
    public function getCenter() {
        return $this->center;
    }

    /**
     * {@inheritdoc}
     */
    public function setCenter($center) {
        $this->center = $center;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId() {
        return $this->userId;
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
    public function setMarkerIcon($markerIcon) {
        $this->markerIcon = $markerIcon;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMarkerIcon() {
        return $this->markerIcon;
    }

    /**
     * {@inheritdoc}
     */
    public function setGeomType($geomType) {
        $this->geomType = $geomType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGeomType() {
        return $this->geomType;
    }

    /**
     * {@inheritdoc}
     */
    public function setBuffer($buffer) {
        $this->buffer = $buffer;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBuffer() {
        return $this->buffer;
    }

    /**
     * {@inheritdoc}
     */
    public function setPublic($public) {
        $this->public = $public;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isPublic() {
        return $this->public;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setRadius($radius) {
        $this->radius = $radius;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRadius() {
        return $this->radius;
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
    public function __toString() {
        return $this->name;
    }

}
