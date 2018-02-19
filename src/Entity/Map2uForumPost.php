<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumPost
 *
 * @ORM\Table(name="map2u__forum_post", indexes={@ORM\Index(name="idx_beac42699e721b9", columns={"fk_unlocked_by_user_id"}), @ORM\Index(name="idx_beac4262d7d63e3", columns={"fk_topic_id"}), @ORM\Index(name="idx_beac4264f5ae4da", columns={"fk_deleted_by_user_id"}), @ORM\Index(name="idx_beac426ceb06035", columns={"fk_created_by_user_id"}), @ORM\Index(name="idx_beac42646b4308f", columns={"fk_edited_by_user_id"})})
 * @ORM\Entity
 */
class Map2uForumPost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_post_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_date", type="datetime", nullable=true)
     */
    private $editedDate;

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
     * @var \DateTime
     *
     * @ORM\Column(name="unlocked_date", type="datetime", nullable=true)
     */
    private $unlockedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="unlocked_until_date", type="datetime", nullable=true)
     */
    private $unlockedUntilDate;

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
     *   @ORM\JoinColumn(name="fk_edited_by_user_id", referencedColumnName="id")
     * })
     */
    private $fkEditedByUser;

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
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_unlocked_by_user_id", referencedColumnName="id")
     * })
     */
    private $fkUnlockedByUser;

    /**
     * @var \App\Entity\Map2u\Core\User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_created_by_user_id", referencedColumnName="id")
     * })
     */
    private $fkCreatedByUser;


}
