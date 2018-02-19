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
use App\Entity\Map2u\Core\UserGroupInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserGroupRepository")
 * @ORM\Table(name="map2u_usergroups")
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
class UserGroup implements UserGroupInterface, \Serializable {

    /**
     * @var guid
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection|User[]
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="userGroups")
     */
    protected $users;

    /**
     * Default constructor, initializes collections
     */
    public function __construct() {
        $this->users = new ArrayCollection();
        
    }

    /**
     * @param User $user
     */
    public function addUser(User $user) {
        if ($this->users->contains($user)) {
            return;
        }
        $this->users->add($user);
        $user->addUserGroup($this);
    }

    /**
     * @param User $user
     */
    public function removeUser(User $user) {
        if (!$this->users->contains($user)) {
            return;
        }
        $this->users->removeElement($user);
        $user->removeUserGroup($this);
    }

    public function getUsers() {
        return $this->users;
    }

    public function getId() {
        return $this->id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name||'';
    }

    public function getDescription(): string {
        return $this->description||'';
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize(): string {
        // add $this->salt too if you don't use Bcrypt or Argon2i
      //  return serialize([$this->id, $this->name, $this->description]);
        return " ";
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized): void {
        // add $this->salt too if you don't use Bcrypt or Argon2i
        // 
 //      list($this->id, $this->name, $this->description) = unserialize($serialized, ['allowed_classes' => false]);
        //  [$this->id, $this->name,$this->description] = unserialize($serialized, ['allowed_classes' => false]);
    }

}
