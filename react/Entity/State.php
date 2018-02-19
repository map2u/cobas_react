<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * State
 */
class State {

    use ORMBehaviors\Translatable\Translatable;

    /**
     * @var guid
     */
    private $id;

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
     * @var string
     */
    private $code;

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
     * Set code
     *
     * @param string $code
     * @return mixed
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set lng
     *
     * @param float $lng
     * @return State
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
     * @return State
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
     * @return State
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
