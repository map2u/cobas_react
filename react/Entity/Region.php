<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Region
 */
class Region {

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
     * @var guid
     */
    private $cityId;

    /**
     * @var string
     */
    private $name;

  
    /**
     * Get id
     *
     * @return guid 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set countryId
     *
     * @param guid $countryId
     * @return Region
     */
    public function setCountryId($countryId) {
        $this->countryId = $countryId;

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
     * @return Region
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
     * @return Region
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
     * @return Region
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

    /**
     * Set cityId
     *
     * @param guid $cityId
     * @return Region
     */
    public function setCityId($cityId) {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return guid 
     */
    public function getCityId() {
        return $this->cityId;
    }

    public function getLocale() {

        return $this->locale = locale_get_default();
    }

}
