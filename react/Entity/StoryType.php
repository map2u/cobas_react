<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoryType
 */
class StoryType
{
    /**
     * @var guid
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return StoryType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return StoryType
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add stories
     *
     * @param \Map2u\CoreBundle\Entity\Story $stories
     * @return StoryType
     */
    public function addStory(\Map2u\CoreBundle\Entity\Story $stories)
    {
        $this->stories[] = $stories;

        return $this;
    }

    /**
     * Remove stories
     *
     * @param \Map2u\CoreBundle\Entity\Story $stories
     */
    public function removeStory(\Map2u\CoreBundle\Entity\Story $stories)
    {
        $this->stories->removeElement($stories);
    }

    /**
     * Get stories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStories()
    {
        return $this->stories;
    }
}
