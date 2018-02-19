<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="map2u_user")
 *
 * Defines the properties of the User entity to represent the application users.
 * See https://symfony.com/doc/current/book/doctrine.html#creating-an-entity-class
 *
 * Tip: if you have an existing database, you can generate these entity class automatically.
 * See https://symfony.com/doc/current/cookbook/doctrine/reverse_engineering.html
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class User implements UserInterface, \Serializable {

    /**
     * @var guid
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $firstName;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $locked;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=false, nullable=true)
     */
    private $regIp;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @var string 
     */
    private $plainPassword;

    /**
     * @var string 
     */
    private $plainPasswordConfirm;

    /**
     * @var array
     *
     * @ORM\Column(type="json")
     */
    private $roles;

    /**
     * @var \Doctrine\Common\Collections\Collection|UserGroup[]
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Map2u\Core\UserGroup", inversedBy="users")
     * @ORM\JoinTable(
     *  name="map2u_user_usergroup",
     *  joinColumns={
     *      @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="usergroup_id", referencedColumnName="id")
     *  }
     * )
     */
    protected $userGroups;

    /**
     * @var datetime
     *
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $createdAt;

    /**
     * @var datetime
     *
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * Default constructor, initializes collections
     */
    public function __construct() {
        $this->userGroups = new ArrayCollection();
        $this->roles[] = 'ROLE_USER';
        $this->createdAt = new \DateTime();
    }

    public function getId() {
        return $this->id;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getLocked() {
        return $this->locked;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getRegIp() {
        return $this->regIp;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPlainPassword() {
        return $this->plainPassword;
    }

    public function getPlainPasswordConfirm() {
        return $this->plainPasswordConfirm;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function getUserGroups(): \Doctrine\Common\Collections\Collection {
        return $this->userGroups;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setLocked($locked) {
        $this->locked = $locked;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setRegIp($regIp) {
        $this->regIp = $regIp;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setPlainPassword($plainPassword) {
        $this->plainPassword = $plainPassword;
    }

    public function setPlainPasswordConfirm($plainPasswordConfirm) {
        $this->plainPasswordConfirm = $plainPasswordConfirm;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
    }

    public function setUserGroups(\Doctrine\Common\Collections\Collection $userGroups) {
        $this->userGroups = $userGroups;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function eraseCredentials() {
        
    }

    public function getSalt() {
        
    }

    public function serialize(): string {
        
    }

    public function unserialize($serialized): void {
        
    }

    /**
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps() {
        $this->setUpdatedAt(new \DateTime('now'));

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }
    public function __toString() {
        return $this->username;
    }
}
