<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Sonata Project <https://github.com/sonata-project/SonataClassificationBundle/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Map2u\CoreBundle\Model;

interface MapInterface {

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId();

    /**
     * Set id
     *
     * @param integer $id
     * @return mixed
     */
    public function setId($id);

    /**
     * Set userId
     *
     * @param integer $userId
     * @return mixed
     */
    public function setUserId($userId);

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId();

    /**
     * Set zoomLevel
     *
     * @param integer $zoomLevel
     * @return mixed
     */
    public function setZoomLevel($zoomLevel);

    /**
     * Get zoomLevel
     *
     * @return integer 
     */
    public function getZoomLevel();

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Set layerSeq
     *
     * @param json $layerSeq
     * @return mixed
     */
    public function setLayerSeq($layerSeq);

    /**
     * Get layerSeq
     *
     * @return json 
     */
    public function getLayerSeq();

    /**
     * Set mapTitle
     *
     * @param string $mapTitle
     * @return mixed
     */
    public function setMapTitle($mapTitle);

    /**
     * Get mapTitle
     *
     * @return string 
     */
    public function getMapTitle();

    /**
     * Set shared
     *
     * @param boolean $shared
     * @return mixed
     */
    public function setShared($shared);

    /**
     * Get shared
     *
     * @return boolean 
     */
    public function getShared();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return mixed
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled();

    /**
     * Set baseLayerName
     *
     * @param string $baseLayerName
     * @return mixed
     */
    public function setBaseLayerName($baseLayerName);

    /**
     * Get baseLayerName
     *
     * @return string 
     */
    public function getBaseLayerName();

    /**
     * Set showScale
     *
     * @param boolean $showScale
     * @return mixed
     */
    public function setShowScale($showScale);

    /**
     * Get showScale
     *
     * @return boolean 
     */
    public function getShowScale();

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function isEnabled();

    /**
     * Set public
     *
     * @param boolean $public
     * @return mixed
     */
    public function setPublic($public);

    /**
     * Get public
     *
     * @return boolean 
     */
    public function isPublic();

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic();

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return mixed
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt();

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return mixed
     */
    public function setUpdatedAt(\DateTime $updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt();

    /**
     * Set description
     *
     * @param string $description
     * @return mixed
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * add layer
     *
     * @param \Map2u\CoreBundle\Entity\Layer $layer
     * @return mixed
     */
    public function addLayer(\Map2u\CoreBundle\Entity\Layer $layer = null);

    /**
     * remove layer
     *
     * @param \Map2u\CoreBundle\Entity\Layer $layer
     * @return mixed
     */
    public function removeLayer(\Map2u\CoreBundle\Entity\Layer $layer = null);

    /**
     * Get layers
     *
     * @return  mixed
     */
    public function getLayers();

    /**
     * add report
     *
     * @param \Map2u\CoreBundle\Entity\Report $report
     * @return mixed
     */
    public function addReport(\Map2u\CoreBundle\Entity\Report $report = null);

    /**
     * remove report
     *
     * @param \Map2u\CoreBundle\Entity\Report $report
     * @return mixed
     */
    public function removeReport(\Map2u\CoreBundle\Entity\Report $report = null);

    /**
     * Get reports
     *
     * @return  mixed
     */
    public function getReports();

    /**
     * Set titlePosition
     *
     * @param geometry $titlePosition
     * @return mixed
     */
    public function setTitlePosition($titlePosition);

    /**
     * Get titlePosition
     *
     * @return geometry 
     */
    public function getTitlePosition();

    /**
     * Set mapCenter
     *
     * @param geometry $mapCenter
     * @return mixed
     */
    public function setMapCenter($mapCenter);

    /**
     * Get mapCenter
     *
     * @return geometry 
     */
    public function getMapCenter();

    /**
     * Set titleStyle
     *
     * @param string $titleStyle
     * @return mixed
     */
    public function setTitleStyle($titleStyle);

    /**
     * Get titleStyle
     *
     * @return string 
     */
    public function getTitleStyle();

    /**
     * Set type
     *
     * @param string $type
     * @return mixed
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return string 
     */
    public function getType();

    /**
     * Set category
     *
     * @param \Map2u\CoreBundle\Entity\Category category
     * @return mixed
     */
    public function setCategory($category);

    /**
     * Get category
     *
     * @return \Map2u\CoreBundle\Entity\Category
     */
    public function getCategory();

    /**
     * Set layerCategory
     *
     * @param \Map2u\CoreBundle\Entity\LayerCategory layerCategory
     * @return mixed
     */
    public function setLayerCategory($layerCategory);

    /**
     * Get layerCategory
     *
     * @return \Map2u\CoreBundle\Entity\LayerCategory
     */
    public function getLayerCategory();

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return mixed
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null);

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser();
}
