<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumSubscription
 *
 * @ORM\Table(name="map2u__forum_subscription", indexes={@ORM\Index(name="idx_2d22eb212d7d63e3", columns={"fk_topic_id"}), @ORM\Index(name="idx_2d22eb211be4f90e", columns={"fk_forum_id"}), @ORM\Index(name="idx_2d22eb213bb9921a", columns={"fk_owned_by_user_id"})})
 * @ORM\Entity
 */
class Map2uForumSubscription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_subscription_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_read", type="boolean", nullable=false)
     */
    private $isRead;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_subscribed", type="boolean", nullable=false)
     */
    private $isSubscribed;

    /**
     * @var \Map2uForumForum
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumForum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_forum_id", referencedColumnName="id")
     * })
     */
    private $fkForum;

    /**
     * @var \Map2uForumTopic
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumTopic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_topic_id", referencedColumnName="id")
     * })
     */
    private $fkTopic;

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
