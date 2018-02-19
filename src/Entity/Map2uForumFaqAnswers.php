<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uForumFaqAnswers
 *
 * @ORM\Table(name="map2u__forum_faq_answers", indexes={@ORM\Index(name="idx_11c1a6c077d15a8b", columns={"fk_question_id"})})
 * @ORM\Entity
 */
class Map2uForumFaqAnswers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map2u__forum_faq_answers_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255, nullable=false)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \Map2uForumFaq
     *
     * @ORM\ManyToOne(targetEntity="Map2uForumFaq")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_question_id", referencedColumnName="id")
     * })
     */
    private $fkQuestion;


}
