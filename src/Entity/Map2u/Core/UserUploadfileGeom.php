<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * UseruploadfileGeoms
 *
 * @ORM\Table(name="useruploadfile_geoms", indexes={@ORM\Index(name="idx_271626e9ac237fd3", columns={"useruploadfile_id"})})
 * @ORM\Entity
 */
class UserUploadfileGeom {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ogc_fid", type="integer", nullable=false)
     */
    private $ogcFid;

    /**
     * @var string
     *
     * @ORM\Column(name="keyname", type="string", length=255, nullable=true)
     */
    private $keyname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="geometry_type", type="string", length=20, nullable=true)
     */
    private $geometryType;

    /**
     * @var string
     *
     * @ORM\Column(name="feature_style", type="string", length=250, nullable=true)
     */
    private $featureStyle;

    /**
     * @var float
     *
     * @ORM\Column(name="point_radius", type="float", precision=10, scale=0, nullable=true)
     */
    private $pointRadius;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Useruploadfile
     *
     * @ORM\ManyToOne(targetEntity="Useruploadfile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="useruploadfile_id", referencedColumnName="id")
     * })
     */
    private $useruploadfile;

    public function getId() {
        return $this->id;
    }

    public function getOgcFid() {
        return $this->ogcFid;
    }

    public function getKeyname() {
        return $this->keyname;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getGeometryType() {
        return $this->geometryType;
    }

    public function getFeatureStyle() {
        return $this->featureStyle;
    }

    public function getPointRadius() {
        return $this->pointRadius;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getUseruploadfile(): \Useruploadfile {
        return $this->useruploadfile;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setOgcFid($ogcFid) {
        $this->ogcFid = $ogcFid;
    }

    public function setKeyname($keyname) {
        $this->keyname = $keyname;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setGeometryType($geometryType) {
        $this->geometryType = $geometryType;
    }

    public function setFeatureStyle($featureStyle) {
        $this->featureStyle = $featureStyle;
    }

    public function setPointRadius($pointRadius) {
        $this->pointRadius = $pointRadius;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setUseruploadfile(\Useruploadfile $useruploadfile) {
        $this->useruploadfile = $useruploadfile;
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
