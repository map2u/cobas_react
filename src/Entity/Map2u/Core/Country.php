<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreCountry
 *
 * @ORM\Table(name="map2u_core__country")
 * @ORM\Entity
 */
class Country
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
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float", precision=10, scale=0, nullable=false)
     */
    private $lng;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=false)
     */
    private $lat;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoom_level", type="integer", nullable=false)
     */
    private $zoomLevel;
    public function getId(): guid {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getLng() {
        return $this->lng;
    }

    public function getLat() {
        return $this->lat;
    }

    public function getZoomLevel() {
        return $this->zoomLevel;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function setZoomLevel($zoomLevel) {
        $this->zoomLevel = $zoomLevel;
    }



}
