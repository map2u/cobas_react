<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logos
 *
 * @ORM\Table(name="logos")
 * @ORM\Entity
 */
class Logos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="logos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="imagename", type="string", length=255, nullable=true)
     */
    private $imagename;

    /**
     * @var string
     *
     * @ORM\Column(name="image_filename", type="string", length=255, nullable=true)
     */
    private $imageFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string", length=255, nullable=true)
     */
    private $imagePath;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="website_url", type="string", length=255, nullable=false)
     */
    private $websiteUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="image_tip", type="string", length=125, nullable=true)
     */
    private $imageTip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="showseq", type="integer", nullable=false)
     */
    private $showseq;

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


}
