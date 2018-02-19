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
use Map2u\CoreBundle\Model\StoryInterface;
use Application\Sonata\UserBundle\Entity\User;
use Symfony\Component\Locale as Locale;
use Map2u\CoreBundle\Controller\DefaultMethods;

abstract class Story implements StoryInterface {

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $storyName;

    /**
     * @var string
     */
    protected $summary;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $geomType;

    /**
     * @var float
     */
    protected $radius;

    /**
     * @var string
     */
    protected $imageFile;

    /**
     * @var string
     */
    protected $storyFile;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var geometry
     */
    protected $theGeom;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    protected $user;

    /**
     * @var \Map2u\CoreBundle\Entity\StoryType
     */
    protected $storyType;    
    /**
     * @var string
     */
    protected $storyFileType;

    /**
     * @var string
     */
    protected $altText;

    /**
     * @var string
     */
    protected $storyText;

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
    public function setStoryName($storyName) {
        $this->storyName = $storyName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStoryName() {
        return $this->storyName;
    }

      /**
     * {@inheritdoc}
     */
    public function setStoryType($storyType) {
        $this->storyType = $storyType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStoryType() {
        return $this->storyType;
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
    public function setGeomType($geomType) {
        $this->geomType = $geomType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGeomType() {
        return $this->geomType;
    }

    /**
     * {@inheritdoc}
     */
    public function setRadius($radius) {
        $this->radius = $radius;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRadius() {
        return $this->radius;
    }

    /**
     * {@inheritdoc}
     */
    public function setSummary($summary) {
        $this->summary = $summary;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSummary() {
        return $this->summary;
    }

    /**
     * {@inheritdoc}
     */
    public function setImageFile($imageFile) {
        $this->imageFile = $imageFile;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getImageFile() {
        return $this->imageFile;
    }

    /**
     * {@inheritdoc}
     */
    public function setStoryFile($storyFile) {
        $this->storyFile = $storyFile;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStoryFile() {
        return $this->storyFile;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function setTheGeom($theGeom) {
        $this->theGeom = $theGeom;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTheGeom() {
        return $this->theGeom;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
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

    /**
     * {@inheritdoc}
     */
    public function setStoryFileType($storyFileType) {
        $this->storyFileType = $storyFileType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStoryFileType() {
        return $this->storyFileType;
    }

    /**
     * {@inheritdoc}
     */
    public function setStoryText($storyText) {
        $this->storyText = $storyText;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStoryText() {
        return $this->storyText;
    }

    /**
     * {@inheritdoc}
     */
    public function setAltText($altText) {
        $this->altText = $altText;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAltText() {
        return $this->altText;
    }

}
