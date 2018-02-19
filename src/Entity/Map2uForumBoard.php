<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumBoard
 *
 * @ORM\Table(name="map2u__forum_board", indexes={@ORM\Index(name="idx_1903318f7bb031d6", columns={"fk_category_id"}), @ORM\Index(name="idx_1903318fcd83d7d", columns={"fk_last_post_id"})})
 * @ORM\Entity
 */
class Map2uForumBoard
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_board_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="cached_topic_count", type="integer", nullable=false)
     */
    private $cachedTopicCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="cached_post_count", type="integer", nullable=false)
     */
    private $cachedPostCount;

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
     * @var array
     *
     * @ORM\Column(name="topic_create_authorised_roles", type="array", nullable=true)
     */
    private $topicCreateAuthorisedRoles;

    /**
     * @var array
     *
     * @ORM\Column(name="topic_reply_authorised_roles", type="array", nullable=true)
     */
    private $topicReplyAuthorisedRoles;

    /**
     * @var \Map2uForumCategory
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_category_id", referencedColumnName="id")
     * })
     */
    private $fkCategory;

    /**
     * @var \Map2uForumPost
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumPost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_last_post_id", referencedColumnName="id")
     * })
     */
    private $fkLastPost;


}
