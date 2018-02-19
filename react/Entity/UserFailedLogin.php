<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFailedLogin
 */
class UserFailedLogin
{
    /**
     * @var guid
     */
    private $id;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $loginip;

    /**
     * @var \DateTime
     */
    private $firstTime;

    /**
     * @var \DateTime
     */
    private $lastTime;

    /**
     * @var integer
     */
    private $try;

    /**
     * @var string
     */
    private $agent;


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
     * Set userid
     *
     * @param string $userid
     * @return UserFailedLogin
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return UserFailedLogin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return UserFailedLogin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set loginip
     *
     * @param string $loginip
     * @return UserFailedLogin
     */
    public function setLoginip($loginip)
    {
        $this->loginip = $loginip;

        return $this;
    }

    /**
     * Get loginip
     *
     * @return string 
     */
    public function getLoginip()
    {
        return $this->loginip;
    }

    /**
     * Set firstTime
     *
     * @param \DateTime $firstTime
     * @return UserFailedLogin
     */
    public function setFirstTime($firstTime)
    {
        $this->firstTime = $firstTime;

        return $this;
    }

    /**
     * Get firstTime
     *
     * @return \DateTime 
     */
    public function getFirstTime()
    {
        return $this->firstTime;
    }

    /**
     * Set lastTime
     *
     * @param \DateTime $lastTime
     * @return UserFailedLogin
     */
    public function setLastTime($lastTime)
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    /**
     * Get lastTime
     *
     * @return \DateTime 
     */
    public function getLastTime()
    {
        return $this->lastTime;
    }

    /**
     * Set try
     *
     * @param integer $try
     * @return UserFailedLogin
     */
    public function setTry($try)
    {
        $this->try = $try;

        return $this;
    }

    /**
     * Get try
     *
     * @return integer 
     */
    public function getTry()
    {
        return $this->try;
    }

    /**
     * Set agent
     *
     * @param string $agent
     * @return UserFailedLogin
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
