<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Map2u\CoreBundle\Entity\BaseLayer ;

/**
 * GeoServerLayer
 */
class GeoServerLayer extends BaseLayer{

    /**
     * @var guid
     */
    protected $id;

  
    /**
     * @var integer
     */
    protected $seq;

    /**
     * @var integer
     */
    protected $minZoom;

    /**
     * @var integer
     */
    protected $maxZoom;

    /**
     * @var string
     */
    protected $layerTitle;

    /**
     * @var string
     */
    protected $layerType;

    /**
     * @var string
     */
    protected $layerName;

    /**
     * @var string
     */
    protected $defaultSldName;

    /**
     * @var string
     */
    protected $hostName;

    /**
     * @var string
     */
    protected $defaultShowOnMap;

    /**
     * @var boolean
     */
    protected $clusterMap;

    /**
     * @var boolean
     */
    protected $published;

    /**
     * @var boolean
     */
    protected $public;

    /**
     * @var boolean
     */
    protected $layerShowInSwitcher;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $description;

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param guid $id
     * @return GeoServerLayer
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Set userId
     *
     * @param guid $userId
     * @return GeoServerLayer
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return guid 
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Set seq
     *
     * @param integer $seq
     * @return GeoServerLayer
     */
    public function setSeq($seq) {
        $this->seq = $seq;

        return $this;
    }

    /**
     * Get seq
     *
     * @return integer 
     */
    public function getSeq() {
        return $this->seq;
    }

    /**
     * Set minZoom
     *
     * @param integer $minZoom
     * @return GeoServerLayer
     */
    public function setMinZoom($minZoom) {
        $this->minZoom = $minZoom;

        return $this;
    }

    /**
     * Get minZoom
     *
     * @return integer 
     */
    public function getMinZoom() {
        return $this->minZoom;
    }

    /**
     * Set maxZoom
     *
     * @param integer $maxZoom
     * @return GeoServerLayer
     */
    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;

        return $this;
    }

    /**
     * Get maxZoom
     *
     * @return integer 
     */
    public function getMaxZoom() {
        return $this->maxZoom;
    }

    /**
     * Set layerTitle
     *
     * @param string $layerTitle
     * @return GeoServerLayer
     */
    public function setLayerTitle($layerTitle) {
        $this->layerTitle = $layerTitle;

        return $this;
    }

    /**
     * Get layerTitle
     *
     * @return string 
     */
    public function getLayerTitle() {
        return $this->layerTitle;
    }

    /**
     * Set layerType
     *
     * @param string $layerType
     * @return GeoServerLayer
     */
    public function setLayerType($layerType) {
        $this->layerType = $layerType;

        return $this;
    }

    /**
     * Get layerType
     *
     * @return string 
     */
    public function getLayerType() {
        return $this->layerType;
    }

    /**
     * Set layerName
     *
     * @param string $layerName
     * @return GeoServerLayer
     */
    public function setLayerName($layerName) {
        $this->layerName = $layerName;

        return $this;
    }

    /**
     * Get layerName
     *
     * @return string 
     */
    public function getLayerName() {
        return $this->layerName;
    }

    /**
     * Set defaultSldName
     *
     * @param string $defaultSldName
     * @return UploadfileLayer
     */
    public function setDefaultSldName($defaultSldName) {
        $this->defaultSldName = $defaultSldName;

        return $this;
    }

    /**
     * Get defaultSldName
     *
     * @return string 
     */
    public function getDefaultSldName() {
        return $this->defaultSldName;
    }

    /**
     * Set hostName
     *
     * @param string $hostName
     * @return GeoServerLayer
     */
    public function setHostName($hostName) {
        $this->hostName = $hostName;

        return $this;
    }

    /**
     * Get hostName
     *
     * @return string 
     */
    public function getHostName() {
        return $this->hostName;
    }

    /**
     * Set defaultShowOnMap
     *
     * @param string $defaultShowOnMap
     * @return GeoServerLayer
     */
    public function setDefaultShowOnMap($defaultShowOnMap) {
        $this->defaultShowOnMap = $defaultShowOnMap;

        return $this;
    }

    /**
     * Get defaultShowOnMap
     *
     * @return string 
     */
    public function isDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    /**
     * Set clusterMap
     *
     * @param boolean $clusterMap
     * @return GeoServerLayer
     */
    public function setClusterMap($clusterMap) {
        $this->clusterMap = $clusterMap;

        return $this;
    }

    /**
     * Get clusterMap
     *
     * @return boolean 
     */
    public function isClusterMap() {
        return $this->clusterMap;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return GeoServerLayer
     */
    public function setPublished($published) {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function isPublished() {
        return $this->published;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return GeoServerLayer
     */
    public function setPublic($public) {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function isPublic() {
        return $this->public;
    }

    /**
     * Set layerShowInSwitcher
     *
     * @param boolean $layerShowInSwitcher
     * @return GeoServerLayer
     */
    public function setLayerShowInSwitcher($layerShowInSwitcher) {
        $this->layerShowInSwitcher = $layerShowInSwitcher;

        return $this;
    }

    /**
     * Get layerShowInSwitcher
     *
     * @return boolean 
     */
    public function isLayerShowInSwitcher() {
        return $this->layerShowInSwitcher;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return GeoServerLayer
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    protected $user;

    /**
     * Get defaultShowOnMap
     *
     * @return boolean 
     */
    public function getDefaultShowOnMap() {
        return $this->defaultShowOnMap;
    }

    /**
     * Get clusterMap
     *
     * @return boolean 
     */
    public function getClusterMap() {
        return $this->clusterMap;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished() {
        return $this->published;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic() {
        return $this->public;
    }

    /**
     * Get layerShowInSwitcher
     *
     * @return boolean 
     */
    public function getLayerShowInSwitcher() {
        return $this->layerShowInSwitcher;
    }

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return GeoServerLayer
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @var string
     */
    private $srs;

    /**
     * Set srs
     *
     * @param string $srs
     * @return GeoServerLayer
     */
    public function setSrs($srs) {
        $this->srs = $srs;

        return $this;
    }

    /**
     * Get srs
     *
     * @return string 
     */
    public function getSrs() {
        return $this->srs;
    }

    
}
