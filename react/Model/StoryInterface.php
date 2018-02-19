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

interface StoryInterface {

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId();

    /**
     * Set id
     * @param guid $id
     * @return mixed 
     */
    public function setId($id);

    /**
     * Set storyName
     *
     * @param string $storyName
     * @return mixed
     */
    public function setStoryName($storyName);

    /**
     * Get storyName
     *
     * @return string 
     */
    public function getStoryName();

    /**
     * Set storyType
     *
     * @param \Map2u\CoreBundle\Entity\StoryType $storyType
     * @return mixed
     */
    public function setStoryType($storyType);

    /**
     * Get storyType
     *
     * @return \Map2u\CoreBundle\Entity\StoryType 
     */
    public function getStoryType();

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
     * Set geomType
     *
     * @param string $geomType
     * @return mixed
     */
    public function setGeomType($geomType);

    /**
     * Get geomType
     *
     * @return string 
     */
    public function getGeomType();

    /**
     * Set radius
     *
     * @param string $radius
     * @return mixed
     */
    public function setRadius($radius);

    /**
     * Get radius
     *
     * @return float 
     */
    public function getRadius();

    /**
     * Set summary
     *
     * @param string $summary
     * @return mixed
     */
    public function setSummary($summary);

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary();

    /**
     * Set imageFile
     *
     * @param string $imageFile
     * @return mixed
     */
    public function setImageFile($imageFile);

    /**
     * Get imageFile
     *
     * @return string 
     */
    public function getImageFile();

    /**
     * Set storyFile
     *
     * @param string $storyFile
     * @return mixed
     */
    public function setStoryFile($storyFile);

    /**
     * Get storyFile
     *
     * @return string 
     */
    public function getStoryFile();

    /**
     * Set email
     *
     * @param string $email
     * @return mixed
     */
    public function setEmail($email);

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail();

    /**
     * Set theGeom
     *
     * @param geometry $theGeom
     * @return mixed
     */
    public function setTheGeom($theGeom);

    /**
     * Get theGeom
     *
     * @return geometry 
     */
    public function getTheGeom();

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return mixed
     */
    public function setCreatedAt($createdAt);

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
    public function setUpdatedAt($updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt();

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

    /**
     * Set storyFileType
     *
     * @param string $storyFileType
     * @return mixed
     */
    public function setStoryFileType($storyFileType);

    /**
     * Get storyFileType
     *
     * @return string 
     */
    public function getStoryFileType();

    /**
     * Set storyText
     *
     * @param string $storyText
     * @return mixed
     */
    public function setStoryText($storyText);

    /**
     * Get storyText
     *
     * @return string 
     */
    public function getStoryText();

    /**
     * Set altText
     *
     * @param string $altText
     * @return mixed
     */
    public function setAltText($altText);

    /**
     * Get altText
     *
     * @return string 
     */
    public function getAltText();
}
