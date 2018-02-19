<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreCity
 *
 * @ORM\Table(name="map2u_core__city")
 * @ORM\Entity
 */
class City
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
     * @var guid
     *
     * @ORM\Column(name="state_uuid", type="guid", nullable=true)
     */
    private $stateUuid;

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

    public function getCountryUuid(): guid {
        return $this->countryUuid;
    }

    public function getStateUuid(): guid {
        return $this->stateUuid;
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

    public function setCountryUuid(guid $countryUuid) {
        $this->countryUuid = $countryUuid;
    }

    public function setStateUuid(guid $stateUuid) {
        $this->stateUuid = $stateUuid;
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
