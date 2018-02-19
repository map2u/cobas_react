<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLoginFailureLog
 */
class UserLoginFailureLog
{
    /**
     * @var guid
     */
    private $id;

    /**
     * @var guid
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
     * Set userid
     *
     * @param guid $userid
     * @return UserLoginFailureLog
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return guid 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return UserLoginFailureLog
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
     * @return UserLoginFailureLog
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
     * @return UserLoginFailureLog
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
     * @return UserLoginFailureLog
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
     * @return UserLoginFailureLog
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
     * @return UserLoginFailureLog
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
     * @return UserLoginFailureLog
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
     * @return UserLoginFailureLog
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
