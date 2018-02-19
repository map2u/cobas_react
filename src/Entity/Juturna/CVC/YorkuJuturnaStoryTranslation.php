<?php

namespace App\Entity\Juturna\CVC;

use Doctrine\ORM\Mapping as ORM;

/**
 * YorkuJuturnaStoryTranslation
 *
 * @ORM\Table(name="yorku_juturna__story_translation", uniqueConstraints={@ORM\UniqueConstraint(name="yorku_juturna__story_translation_unique_translation", columns={"translatable_id", "locale"})}, indexes={@ORM\Index(name="idx_6718ecaf2c2ac5d3", columns={"translatable_id"})})
 * @ORM\Entity
 */
class YorkuJuturnaStoryTranslation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\SequenceGenerator(sequenceName="yorku_juturna__story_translation_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="locale", type="string", length=255, nullable=false)
     */
    private $locale;

    /**
     * @var \YorkuJuturnaStories
     *
     * @ORM\ManyToOne(targetEntity="YorkuJuturnaStories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="translatable_id", referencedColumnName="id")
     * })
     */
    private $translatable;


}
