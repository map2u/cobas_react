<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLoginFailureLog
 *
 * @ORM\Table(name="user_login_failure_log", indexes={@ORM\Index(name="idx_9a500211f132696e", columns={"userid"})})
 * @ORM\Entity
 */
class UserLoginFailureLog
{
    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="loginip", type="string", length=50, nullable=true)
     */
    private $loginip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_time", type="datetime", nullable=true)
     */
    private $firstTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_time", type="datetime", nullable=true)
     */
    private $lastTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="try", type="integer", nullable=true)
     */
    private $try;

    /**
     * @var string
     *
     * @ORM\Column(name="agent", type="string", length=500, nullable=true)
     */
    private $agent;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;

    public function getId(): guid {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getLoginip() {
        return $this->loginip;
    }

    public function getFirstTime(): \DateTime {
        return $this->firstTime;
    }

    public function getLastTime(): \DateTime {
        return $this->lastTime;
    }

    public function getTry() {
        return $this->try;
    }

    public function getAgent() {
        return $this->agent;
    }

    public function getUserid(): \App\Entity\Map2u\Core\User {
        return $this->userid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setLoginip($loginip) {
        $this->loginip = $loginip;
    }

    public function setFirstTime(\DateTime $firstTime) {
        $this->firstTime = $firstTime;
    }

    public function setLastTime(\DateTime $lastTime) {
        $this->lastTime = $lastTime;
    }

    public function setTry($try) {
        $this->try = $try;
    }

    public function setAgent($agent) {
        $this->agent = $agent;
    }

    public function setUserid(\App\Entity\Map2u\Core\User $userid) {
        $this->userid = $userid;
    }


}
