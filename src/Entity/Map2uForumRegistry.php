<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumRegistry
 *
 * @ORM\Table(name="map2u__forum_registry", indexes={@ORM\Index(name="idx_f93885133bb9921a", columns={"fk_owned_by_user_id"})})
 * @ORM\Entity
 */
class Map2uForumRegistry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_registry_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cached_post_count", type="integer", nullable=false)
     */
    private $cachedPostCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="cached_karma_positive_count", type="integer", nullable=false)
     */
    private $cachedKarmaPositiveCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="cached_karma_negative_count", type="integer", nullable=false)
     */
    private $cachedKarmaNegativeCount;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_owned_by_user_id", referencedColumnName="id")
     * })
     */
    private $fkOwnedByUser;


}
