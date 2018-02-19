<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Map2u\CoreBundle\Entity\BaseLayerGeom;

/**
 * LayerGeom
 */
class LayerGeom extends BaseLayerGeom {

    /**
     * @var integer
     */
    protected $ogcFid;

    /**
     * @var integer
     */
    protected $projectId;

    /**
     * @var integer
     */
    protected $userId;

    /**
     * @var boolean
     */
    protected $centralPoint;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $areaRadius;

    /**
     * @var \Map2u\CoreBundle\Entity\Layer
     */
    protected $layer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $layers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $categories;

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
     * Constructor
     */
    public function __construct() {
        $this->layers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set ogcFid
     *
     * @param integer $ogcFid
     * @return LayerGeom
     */
    public function setOgcFid($ogcFid) {
        $this->ogcFid = $ogcFid;

        return $this;
    }

    /**
     * Get ogcFid
     *
     * @return integer 
     */
    public function getOgcFid() {
        return $this->ogcFid;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     * @return LayerGeom
     */
    public function setProjectId($projectId) {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return integer 
     */
    public function getProjectId() {
        return $this->projectId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Layer
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Set centralPoint
     *
     * @param boolean $centralPoint
     * @return LayerGeom
     */
    public function setCentralPoint($centralPoint) {
        $this->centralPoint = $centralPoint;

        return $this;
    }

    /**
     * Get centralPoint
     *
     * @return boolean 
     */
    public function getCentralPoint() {
        return $this->centralPoint;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return LayerGeom
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
        return $this->name;
    }

    /**
     * Set areaRadius
     *
     * @param float $areaRadius
     * @return LayerGeom
     */
    public function setAreaRadius($areaRadius) {
        $this->areaRadius = $areaRadius;

        return $this;
    }

    /**
     * Get areaRadius
     *
     * @return float 
     */
    public function getAreaRadius() {
        return $this->areaRadius;
    }

    /**
     * Set theGeom
     *
     * @param geometry $theGeom
     * @return LayerGeom
     */
    public function setTheGeom($theGeom) {
        $this->theGeom = $theGeom;

        return $this;
    }

    /**
     * Get theGeom
     *
     * @return geometry 
     */
    public function getTheGeom() {
        return $this->theGeom;
    }

    /**
     * Add layers
     *
     * @param \Map2u\CoreBundle\Entity\Layer $layers
     * @return LayerGeom
     */
    public function addLayer(\Map2u\CoreBundle\Entity\Layer $layers) {
        $this->layers[] = $layers;

        return $this;
    }

    /**
     * Remove layers
     *
     * @param \Map2u\CoreBundle\Entity\Layer $layers
     */
    public function removeLayer(\Map2u\CoreBundle\Entity\Layer $layers) {
        $this->layers->removeElement($layers);
    }

    /**
     * Get layers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLayers() {
        return $this->layers;
    }

    /**
     * Add tags
     *
     * @param \Map2u\CoreBundle\Entity\Tag $tags
     * @return LayerGeom
     */
    public function addTag(\Map2u\CoreBundle\Entity\Tag $tags) {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Map2u\CoreBundle\Entity\Tag $tags
     */
    public function removeTag(\Map2u\CoreBundle\Entity\Tag $tags) {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Add categories
     *
     * @param \Map2u\CoreBundle\Entity\Category $categories
     * @return LayerGeom
     */
    public function addCategory(\Map2u\CoreBundle\Entity\Category $categories) {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Map2u\CoreBundle\Entity\Category $categories
     */
    public function removeCategory(\Map2u\CoreBundle\Entity\Category $categories) {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * @var string
     */
    protected $type;

    /**
     * Set type
     *
     * @param string $type
     * @return LayerGeom
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Layer
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Layer
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Layer
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
     * @var string
     */
    protected $drawType;

    /**
     * @var string
     */
    protected $typeName;

    /**
     * Set drawType
     *
     * @param string $drawType
     * @return LayerGeom
     */
    public function setDrawType($drawType) {
        $this->drawType = $drawType;

        return $this;
    }

    /**
     * Get drawType
     *
     * @return string 
     */
    public function getDrawType() {
        return $this->drawType;
    }

    /**
     * Set typeName
     *
     * @param string $typeName
     * @return LayerGeom
     */
    public function setTypeName($typeName) {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get typeName
     *
     * @return string 
     */
    public function getTypeName() {
        return $this->typeName;
    }

    /**
     * @var string
     */
    protected $featureName;

    /**
     * Set featureName
     *
     * @param string $featureName
     * @return LayerGeom
     */
    public function setFeatureName($featureName) {
        $this->featureName = $featureName;

        return $this;
    }

    /**
     * Get featureName
     *
     * @return string 
     */
    public function getFeatureName() {
        return $this->featureName;
    }

    /**
     * @var string
     */
    protected $locId;

    /**
     * Set locId
     *
     * @param string $locId
     * @return LayerGeom
     */
    public function setLocId($locId) {
        $this->locId = $locId;

        return $this;
    }

    /**
     * Get locId
     *
     * @return string 
     */
    public function getLocId() {
        return $this->locId;
    }

    /**
     * @var integer
     */
    protected $multiGeom;

    /**
     * Set multiGeom
     *
     * @param integer $multiGeom
     * @return LayerGeom
     */
    public function setMultiGeom($multiGeom) {
        $this->multiGeom = $multiGeom;

        return $this;
    }

    /**
     * Get multiGeom
     *
     * @return integer 
     */
    public function getMultiGeom() {
        return $this->multiGeom;
    }


    /**
     * Set layer
     *
     * @param \Map2u\CoreBundle\Entity\Layer $layer
     * @return LayerGeom
     */
    public function setLayer(\Map2u\CoreBundle\Entity\Layer $layer = null)
    {
        $this->layer = $layer;

        return $this;
    }
}
