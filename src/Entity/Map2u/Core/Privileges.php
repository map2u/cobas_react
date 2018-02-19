<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privileges
 *
 * @ORM\Table(name="privileges")
 * @ORM\Entity
 */
class Privileges
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=true)
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    public function getId() {
        return $this->id;
    }

    public function getRoleId() {
        return $this->roleId;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRoleId($roleId) {
        $this->roleId = $roleId;
    }

    public function setName($name) {
        $this->name = $name;
    }


}
