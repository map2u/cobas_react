<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSessionsLog
 *
 * @ORM\Table(name="user_sessions_log", indexes={@ORM\Index(name="idx_80d8cf12abfe1c6f", columns={"user_uuid"})})
 * @ORM\Entity
 */
class UserSessionsLog
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
     * @ORM\Column(name="sessionid", type="string", length=50, nullable=true)
     */
    private $sessionid;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionip", type="string", length=50, nullable=true)
     */
    private $sessionip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_start", type="datetime", nullable=true)
     */
    private $sessionStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_update", type="datetime", nullable=true)
     */
    private $sessionUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_end", type="datetime", nullable=true)
     */
    private $sessionEnd;

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
     *   @ORM\JoinColumn(name="user_uuid", referencedColumnName="id")
     * })
     */
    private $userUuid;

    public function getId(): guid {
        return $this->id;
    }

    public function getSessionid() {
        return $this->sessionid;
    }

    public function getSessionip() {
        return $this->sessionip;
    }

    public function getSessionStart(): \DateTime {
        return $this->sessionStart;
    }

    public function getSessionUpdate(): \DateTime {
        return $this->sessionUpdate;
    }

    public function getSessionEnd(): \DateTime {
        return $this->sessionEnd;
    }

    public function getAgent() {
        return $this->agent;
    }

    public function getUserUuid(): \App\Entity\Map2u\Core\User {
        return $this->userUuid;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setSessionid($sessionid) {
        $this->sessionid = $sessionid;
    }

    public function setSessionip($sessionip) {
        $this->sessionip = $sessionip;
    }

    public function setSessionStart(\DateTime $sessionStart) {
        $this->sessionStart = $sessionStart;
    }

    public function setSessionUpdate(\DateTime $sessionUpdate) {
        $this->sessionUpdate = $sessionUpdate;
    }

    public function setSessionEnd(\DateTime $sessionEnd) {
        $this->sessionEnd = $sessionEnd;
    }

    public function setAgent($agent) {
        $this->agent = $agent;
    }

    public function setUserUuid(\App\Entity\Map2u\Core\User $userUuid) {
        $this->userUuid = $userUuid;
    }


}
