<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumForum
 *
 * @ORM\Table(name="map2u__forum_forum", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_c47ea4055e237e06", columns={"name"})})
 * @ORM\Entity
 */
class Map2uForumForum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_forum_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="read_authorised_roles", type="array", nullable=true)
     */
    private $readAuthorisedRoles;


}
