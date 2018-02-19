<?php

namespace App\Entity\Juturna\CVC;

use Doctrine\ORM\Mapping as ORM;

/**
 * YorkuJuturnaStories
 *
 * @ORM\Table(name="yorku_juturna__stories", indexes={@ORM\Index(name="idx_dfe5b987a76ed395", columns={"user_id"}), @ORM\Index(name="idx_dfe5b987737cd9e2", columns={"storytype_id"})})
 * @ORM\Entity
 */
class YorkuJuturnaStories
{
    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\SequenceGenerator(sequenceName="yorku_juturna__stories_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="story_name", type="string", length=255, nullable=false)
     */
    private $storyName;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="geom_type", type="string", length=255, nullable=true)
     */
    private $geomType;

    /**
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="image_file", type="string", length=250, nullable=true)
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_text", type="string", length=500, nullable=true)
     */
    private $altText;

    /**
     * @var string
     *
     * @ORM\Column(name="story_file", type="string", length=255, nullable=true)
     */
    private $storyFile;

    /**
     * @var string
     *
     * @ORM\Column(name="story_filetype", type="string", length=255, nullable=true)
     */
    private $storyFiletype;

    /**
     * @var string
     *
     * @ORM\Column(name="story_text", type="text", nullable=true)
     */
    private $storyText;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var geometry
     *
     * @ORM\Column(name="the_geom", type="geometry", nullable=true)
     */
    private $theGeom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \App\Entity\Map2u\Core\StoryType
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\StoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="storytype_id", referencedColumnName="id")
     * })
     */
    private $storytype;

    /**
     * @var \Map2uUser
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
