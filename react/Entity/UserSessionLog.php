<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSessionLog
 */
class UserSessionLog
{
    /**
     * @var guid
     */
    private $id;

    /**
     * @var string
     */
    private $sessionid;

    /**
     * @var string
     */
    private $sessionip;

    /**
     * @var \DateTime
     */
    private $session_start;

    /**
     * @var \DateTime
     */
    private $session_update;

    /**
     * @var \DateTime
     */
    private $session_end;

    /**
     * @var string
     */
    private $agent;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


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
     * Set sessionid
     *
     * @param string $sessionid
     * @return UserSessionLog
     */
    public function setSessionid($sessionid)
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    /**
     * Get sessionid
     *
     * @return string 
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set sessionip
     *
     * @param string $sessionip
     * @return UserSessionLog
     */
    public function setSessionip($sessionip)
    {
        $this->sessionip = $sessionip;

        return $this;
    }

    /**
     * Get sessionip
     *
     * @return string 
     */
    public function getSessionip()
    {
        return $this->sessionip;
    }

    /**
     * Set session_start
     *
     * @param \DateTime $sessionStart
     * @return UserSessionLog
     */
    public function setSessionStart($sessionStart)
    {
        $this->session_start = $sessionStart;

        return $this;
    }

    /**
     * Get session_start
     *
     * @return \DateTime 
     */
    public function getSessionStart()
    {
        return $this->session_start;
    }

    /**
     * Set session_update
     *
     * @param \DateTime $sessionUpdate
     * @return UserSessionLog
     */
    public function setSessionUpdate($sessionUpdate)
    {
        $this->session_update = $sessionUpdate;

        return $this;
    }

    /**
     * Get session_update
     *
     * @return \DateTime 
     */
    public function getSessionUpdate()
    {
        return $this->session_update;
    }

    /**
     * Set session_end
     *
     * @param \DateTime $sessionEnd
     * @return UserSessionLog
     */
    public function setSessionEnd($sessionEnd)
    {
        $this->session_end = $sessionEnd;

        return $this;
    }

    /**
     * Get session_end
     *
     * @return \DateTime 
     */
    public function getSessionEnd()
    {
        return $this->session_end;
    }

    /**
     * Set agent
     *
     * @param string $agent
     * @return UserSessionLog
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return string 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return UserSessionLog
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
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        // Add your code here
    }
}
