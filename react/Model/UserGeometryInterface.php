<?php

namespace Map2u\CoreBundle\Model;

interface UserGeometryInterface {

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId();

    /**
     * Set userId
     *
     * @param guid $userId
     * @return mixed
     */
    public function setUserId($userId);

    /**
     * Get userId
     *
     * @return guid 
     */
    public function getUserId();

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle();

    /**
     * Set style
     *
     * @param string $style
     * @return mixed
     */
    public function setStyle($style);

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Set markerIcon
     *
     * @param string $markerIcon
     * @return mixed
     */
    public function setMarkerIcon($markerIcon);

    /**
     * Get markerIcon
     *
     * @return string 
     */
    public function getMarkerIcon();

    /**
     * Set geomType
     *
     * @param string $geomType
     * @return mixed
     */
    public function setGeomType($geomType);

    /**
     * Get geomType
     *
     * @return string 
     */
    public function getGeomType();

    /**
     * Set buffer
     *
     * @param float $buffer
     * @return mixed
     */
    public function setBuffer($buffer);

    /**
     * Get buffer
     *
     * @return float 
     */
    public function getBuffer();

    /**
     * Set public
     *
     * @param boolean $public
     * @return mixed
     */
    public function setPublic($public);

    /**
     * Get public
     *
     * @return boolean 
     */
    public function isPublic();

    /**
     * Set description
     *
     * @param string $description
     * @return mixed
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return mixed
     */
    public function setCreatedAt($createdAt);

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt();

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return mixed
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt();

    /**
     * Set radius
     *
     * @param float $radius
     * @return mixed
     */
    public function setRadius($radius);

    /**
     * Get radius
     *
     * @return float 
     */
    public function getRadius();

    /**
     * Set theGeom
     *
     * @param geometry $theGeom
     * @return mixed
     */
    public function setTheGeom($theGeom);

    /**
     * Get theGeom
     *
     * @return geometry 
     */
    public function getTheGeom();

    /**
     * @return string
     */
    public function __toString();
}
