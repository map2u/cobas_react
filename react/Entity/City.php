<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * City
 */
class City {

    use ORMBehaviors\Translatable\Translatable;

    /**
     * @var guid
     */
    private $id;

    /**
     * @var guid
     */
    private $countryId;

    /**
     * @var guid
     */
    private $stateId;

    /**
     * @var float
     */
    private $lng;

    /**
     * @var float
     */
    private $lat;

    /**
     * @var integer
     */
    private $zoomLevel;

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * set id
     * @param guid $id
     * @return mixed     *

     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get countryId
     *
     * @return guid 
     */
    public function getCountryId() {
        return $this->countryId;
    }

    /**
     * set countryId
     * @param guid $countryId
     * @return mixed     
     * 
     */
    public function setCountryId($countryId) {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * Get stateId
     *
     * @return guid 
     */
    public function getStateId() {
        return $this->stateId;
    }

    /**
     * set stateId
     * @param guid $stateId
     * @return mixed     *

     */
    public function setStateId($stateId) {
        $this->stateId = $stateId;
        return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        $this->getLocale();
        if (method_exists($this, "translate")) {
            if (isset($this->locale) && $this->locale !== null && strlen(trim($this->locale)) > 1) {
                $this->name = $this->translate($this->locale)->getName();
            } else {
                $this->name = $this->translate('en')->getName();
            }
        }
        return $this->name;
    }

    /**
     * Set lng
     *
     * @param float $lng
     * @return mixed
     */
    public function setLng($lng) {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float 
     */
    public function getLng() {
        return $this->lng;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return City
     */
    public function setLat($lat) {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat() {
        return $this->lat;
    }

    /**
     * Set zoomLevel
     *
     * @param integer $zoomLevel
     * @return City
     */
    public function setZoomLevel($zoomLevel) {
        $this->zoomLevel = $zoomLevel;

        return $this;
    }

    /**
     * Get zoomLevel
     *
     * @return integer 
     */
    public function getZoomLevel() {
        return $this->zoomLevel;
    }

    public function getLocale() {

        return $this->locale = locale_get_default();
    }

}
