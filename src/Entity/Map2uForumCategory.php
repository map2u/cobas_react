<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumCategory
 *
 * @ORM\Table(name="map2u__forum_category", indexes={@ORM\Index(name="idx_32dc81d81be4f90e", columns={"fk_forum_id"})})
 * @ORM\Entity
 */
class Map2uForumCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_category_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="list_order_priority", type="integer", nullable=false)
     */
    private $listOrderPriority;

    /**
     * @var array
     *
     * @ORM\Column(name="read_authorised_roles", type="array", nullable=true)
     */
    private $readAuthorisedRoles;

    /**
     * @var \Map2uForumForum
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumForum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_forum_id", referencedColumnName="id")
     * })
     */
    private $fkForum;


}
