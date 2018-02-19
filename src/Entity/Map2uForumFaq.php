<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumFaq
 *
 * @ORM\Table(name="map2u__forum_faq", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_5657e4fdb6f7494e", columns={"question"})})
 * @ORM\Entity
 */
class Map2uForumFaq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_faq_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=false)
     */
    private $question;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


}
