<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumTopic
 *
 * @ORM\Table(name="map2u__forum_topic", indexes={@ORM\Index(name="idx_dc15c4d3cd83d7d", columns={"fk_last_post_id"}), @ORM\Index(name="idx_dc15c4d3d5c4145b", columns={"fk_board_id"}), @ORM\Index(name="idx_dc15c4d3d5a466fa", columns={"fk_closed_by_user_id"}), @ORM\Index(name="idx_dc15c4d34f5ae4da", columns={"fk_deleted_by_user_id"}), @ORM\Index(name="idx_dc15c4d345768453", columns={"fk_stickied_by_user_id"}), @ORM\Index(name="idx_dc15c4d33c4f1a12", columns={"fk_first_post_id"})})
 * @ORM\Entity
 */
class Map2uForumTopic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_topic_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="cached_view_count", type="integer", nullable=false)
     */
    private $cachedViewCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="cached_reply_count", type="integer", nullable=false)
     */
    private $cachedReplyCount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_closed", type="boolean", nullable=false)
     */
    private $isClosed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closed_date", type="datetime", nullable=true)
     */
    private $closedDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_date", type="datetime", nullable=true)
     */
    private $deletedDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sticky", type="boolean", nullable=false)
     */
    private $isSticky;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stickied_date", type="datetime", nullable=true)
     */
    private $stickiedDate;

    /**
     * @var \Map2uForumPost
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumPost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_first_post_id", referencedColumnName="id")
     * })
     */
    private $fkFirstPost;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_stickied_by_user_id", referencedColumnName="id")
     * })
     */
    private $fkStickiedByUser;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_deleted_by_user_id", referencedColumnName="id")
     * })
     */
    private $fkDeletedByUser;

    /**
     * @var \Map2uForumPost
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumPost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_last_post_id", referencedColumnName="id")
     * })
     */
    private $fkLastPost;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_closed_by_user_id", referencedColumnName="id")
     * })
     */
    private $fkClosedByUser;

    /**
     * @var \Map2uForumBoard
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumBoard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_board_id", referencedColumnName="id")
     * })
     */
    private $fkBoard;


}
