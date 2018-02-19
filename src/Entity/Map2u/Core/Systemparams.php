<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Systemparams
 *
 * @ORM\Table(name="systemparams")
 * @ORM\Entity
 */
class Systemparams {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1_name", type="string", length=60, nullable=true)
     */
    private $logo1Name;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2_name", type="string", length=60, nullable=true)
     */
    private $logo2Name;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3_name", type="string", length=60, nullable=true)
     */
    private $logo3Name;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1_blob", type="blob", nullable=true)
     */
    private $logo1Blob;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2_blob", type="blob", nullable=true)
     */
    private $logo2Blob;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3_blob", type="blob", nullable=true)
     */
    private $logo3Blob;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1_url", type="string", length=120, nullable=true)
     */
    private $logo1Url;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2_url", type="string", length=120, nullable=true)
     */
    private $logo2Url;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3_url", type="string", length=120, nullable=true)
     */
    private $logo3Url;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1_imagetype", type="string", length=20, nullable=true)
     */
    private $logo1Imagetype;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2_imagetype", type="string", length=20, nullable=true)
     */
    private $logo2Imagetype;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3_imagetype", type="string", length=20, nullable=true)
     */
    private $logo3Imagetype;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1_filename", type="string", length=120, nullable=true)
     */
    private $logo1Filename;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2_filename", type="string", length=120, nullable=true)
     */
    private $logo2Filename;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3_filename", type="string", length=120, nullable=true)
     */
    private $logo3Filename;

    /**
     * @var string
     *
     * @ORM\Column(name="masteremail", type="string", length=60, nullable=true)
     */
    private $masteremail;

    /**
     * @var string
     *
     * @ORM\Column(name="geoserverhost", type="string", length=60, nullable=true)
     */
    private $geoserverhost;

    /**
     * @var integer
     *
     * @ORM\Column(name="geoserverport", type="integer", nullable=true)
     */
    private $geoserverport;

    /**
     * @var string
     *
     * @ORM\Column(name="geoserverworkspace", type="string", length=60, nullable=true)
     */
    private $geoserverworkspace;

    public function getId() {
        return $this->id;
    }

    public function getLogo1Name() {
        return $this->logo1Name;
    }

    public function getLogo2Name() {
        return $this->logo2Name;
    }

    public function getLogo3Name() {
        return $this->logo3Name;
    }

    public function getLogo1Blob() {
        return $this->logo1Blob;
    }

    public function getLogo2Blob() {
        return $this->logo2Blob;
    }

    public function getLogo3Blob() {
        return $this->logo3Blob;
    }

    public function getLogo1Url() {
        return $this->logo1Url;
    }

    public function getLogo2Url() {
        return $this->logo2Url;
    }

    public function getLogo3Url() {
        return $this->logo3Url;
    }

    public function getLogo1Imagetype() {
        return $this->logo1Imagetype;
    }

    public function getLogo2Imagetype() {
        return $this->logo2Imagetype;
    }

    public function getLogo3Imagetype() {
        return $this->logo3Imagetype;
    }

    public function getLogo1Filename() {
        return $this->logo1Filename;
    }

    public function getLogo2Filename() {
        return $this->logo2Filename;
    }

    public function getLogo3Filename() {
        return $this->logo3Filename;
    }

    public function getMasteremail() {
        return $this->masteremail;
    }

    public function getGeoserverhost() {
        return $this->geoserverhost;
    }

    public function getGeoserverport() {
        return $this->geoserverport;
    }

    public function getGeoserverworkspace() {
        return $this->geoserverworkspace;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLogo1Name($logo1Name) {
        $this->logo1Name = $logo1Name;
    }

    public function setLogo2Name($logo2Name) {
        $this->logo2Name = $logo2Name;
    }

    public function setLogo3Name($logo3Name) {
        $this->logo3Name = $logo3Name;
    }

    public function setLogo1Blob($logo1Blob) {
        $this->logo1Blob = $logo1Blob;
    }

    public function setLogo2Blob($logo2Blob) {
        $this->logo2Blob = $logo2Blob;
    }

    public function setLogo3Blob($logo3Blob) {
        $this->logo3Blob = $logo3Blob;
    }

    public function setLogo1Url($logo1Url) {
        $this->logo1Url = $logo1Url;
    }

    public function setLogo2Url($logo2Url) {
        $this->logo2Url = $logo2Url;
    }

    public function setLogo3Url($logo3Url) {
        $this->logo3Url = $logo3Url;
    }

    public function setLogo1Imagetype($logo1Imagetype) {
        $this->logo1Imagetype = $logo1Imagetype;
    }

    public function setLogo2Imagetype($logo2Imagetype) {
        $this->logo2Imagetype = $logo2Imagetype;
    }

    public function setLogo3Imagetype($logo3Imagetype) {
        $this->logo3Imagetype = $logo3Imagetype;
    }

    public function setLogo1Filename($logo1Filename) {
        $this->logo1Filename = $logo1Filename;
    }

    public function setLogo2Filename($logo2Filename) {
        $this->logo2Filename = $logo2Filename;
    }

    public function setLogo3Filename($logo3Filename) {
        $this->logo3Filename = $logo3Filename;
    }

    public function setMasteremail($masteremail) {
        $this->masteremail = $masteremail;
    }

    public function setGeoserverhost($geoserverhost) {
        $this->geoserverhost = $geoserverhost;
    }

    public function setGeoserverport($geoserverport) {
        $this->geoserverport = $geoserverport;
    }

    public function setGeoserverworkspace($geoserverworkspace) {
        $this->geoserverworkspace = $geoserverworkspace;
    }

    /**
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps() {
        $this->setUpdatedAt(new \DateTime('now'));

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }

}
