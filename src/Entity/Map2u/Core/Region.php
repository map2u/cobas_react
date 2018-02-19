<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreRegion
 *
 * @ORM\Table(name="map2u_core__region")
 * @ORM\Entity
 */
class Region
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
     * @var guid
     *
     * @ORM\Column(name="country_uuid", type="guid", nullable=true)
     */
    private $countryUuid;

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

    /**
     * @var guid
     *
     * @ORM\Column(name="city_uuid", type="guid", nullable=true)
     */
    private $cityUuid;

    public function getId(): guid {
        return $this->id;
    }

    public function getCountryUuid(): guid {
        return $this->countryUuid;
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

    public function getCityUuid(): guid {
        return $this->cityUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setCountryUuid(guid $countryUuid) {
        $this->countryUuid = $countryUuid;
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

    public function setCityUuid(guid $cityUuid) {
        $this->cityUuid = $cityUuid;
    }


}
