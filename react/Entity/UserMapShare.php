<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMapShare
 */
class UserMapShare
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $extent;

    /**
     * @var string
     */
    private $layersOn;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $shareEmails;

    /**
     * @var string
     */
    private $defaultShowOnMap;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return UserMapShare
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
     * Set extent
     *
     * @param string $extent
     * @return UserMapShare
     */
    public function setExtent($extent)
    {
        $this->extent = $extent;

        return $this;
    }

    /**
     * Get extent
     *
     * @return string 
     */
    public function getExtent()
    {
        return $this->extent;
    }

    /**
     * Set layersOn
     *
     * @param string $layersOn
     * @return UserMapShare
     */
    public function setLayersOn($layersOn)
    {
        $this->layersOn = $layersOn;

        return $this;
    }

    /**
     * Get layersOn
     *
     * @return string 
     */
    public function getLayersOn()
    {
        return $this->layersOn;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return UserMapShare
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return UserMapShare
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
     * Set shareEmails
     *
     * @param string $shareEmails
     * @return UserMapShare
     */
    public function setShareEmails($shareEmails)
    {
        $this->shareEmails = $shareEmails;

        return $this;
    }

    /**
     * Get shareEmails
     *
     * @return string 
     */
    public function getShareEmails()
    {
        return $this->shareEmails;
    }

    /**
     * Set defaultShowOnMap
     *
     * @param string $defaultShowOnMap
     * @return UserMapShare
     */
    public function setDefaultShowOnMap($defaultShowOnMap)
    {
        $this->defaultShowOnMap = $defaultShowOnMap;

        return $this;
    }

    /**
     * Get defaultShowOnMap
     *
     * @return string 
     */
    public function getDefaultShowOnMap()
    {
        return $this->defaultShowOnMap;
    }

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return UserMapShare
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
