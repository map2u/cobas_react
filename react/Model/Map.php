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

use Doctrine\Common\Collections\ArrayCollection;
use Map2u\CoreBundle\Model\MapInterface;

abstract class Map implements MapInterface {

    protected $id;
    protected $userId;
    protected $user;
    protected $category;
    protected $layerSeq;
    protected $zoomLevel;
    protected $name;
    protected $mapTitle;
    protected $titlePosition;
    protected $titleStyle;
    protected $layers;
    protected $showScale;
    protected $enabled;
    protected $mapCenter;
    protected $shared;
    protected $public;
    protected $type;
    protected $groups;
    protected $createdAt;
    protected $updatedAt;
    protected $description;
    protected $reports;
    protected $projects;
    protected $layerCategory;

    public function __construct() {

        $this->layers = new ArrayCollection();
        $this->repors = new ArrayCollection();
        $this->groups = new ArrayCollection();
        $this->projects = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory() {
        $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerCategory($layerCategory) {
        $this->layerCategory = $layerCategory;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerCategory() {
        $this->layerCategory;
    }

    /**
     * {@inheritdoc}
     */
    public function setZoomLevel($zoomLevel) {
        $this->zoomLevel = $zoomLevel;
    }

    /**
     * {@inheritdoc}
     */
    public function getZoomLevel() {
        return $this->zoomLevel;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setLayerSeq($layerSeq) {
        $this->layerSeq = $layerSeq;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLayerSeq() {
        return $this->layerSeq;
    }

    /**
     * {@inheritdoc}
     */
    public function setMapTitle($mapTitle) {
        $this->mapTitle = $mapTitle;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMapTitle() {
        return $this->mapTitle;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitlePosition($titlePosition) {

        $this->titlePosition = $titlePosition;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitlePosition() {
        return $this->titlePosition;
    }

    /**
     * {@inheritdoc}
     */
    public function setMapCenter($mapCenter) {

        $this->mapCenter = $mapCenter;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMapCenter() {
        return $this->mapCenter;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitleStyle($titleStyle) {

        $this->titleStyle = $titleStyle;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitleStyle() {
        return $this->titleStyle;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type) {

        $this->type = $type;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType() {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setShared($shared) {
        $this->shared = $shared;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getShared() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnabled() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseLayerName($baseLayerName) {
        $this->baseLayerName = $baseLayerName;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseLayerName() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setShowScale($showScale) {
        $this->showScale = $showScale;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getShowScale() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setPublic($public) {
        $this->public = $public;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isPublic() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublic() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return $this->shared;
    }

    /**
     * {@inheritdoc}
     */
    public function addLayer(\Map2u\CoreBundle\Entity\Layer $layer = null) {
        $this->layers[] = $layer;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeLayer(\Map2u\CoreBundle\Entity\Layer $layer = null) {
        $this->layers->removeElement($layer);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayers() {
        return $this->layers;
    }

    /**
     * {@inheritdoc}
     */
    public function addReport(\Map2u\CoreBundle\Entity\Report $report = null) {
        $this->reports[] = $report;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeReport(\Map2u\CoreBundle\Entity\Report $report = null) {
        $this->reports->removeElement($report);
    }

    /**
     * {@inheritdoc}
     */
    public function getReports() {
        return $this->reports;
    }

    public function prePersist() {
        
    }

    public function preUpdate() {
        
    }

    public function getLocale() {

        return $this->locale = locale_get_default();
    }

    /**
     * {@inheritdoc}
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser() {
        return $this->user;
    }

}
