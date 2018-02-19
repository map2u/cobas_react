<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ThematicMap
 *
 * @ORM\Table(name="thematic_map", indexes={@ORM\Index(name="idx_26e1c911a76ed395", columns={"old_old_old_user_id"})})
 * @ORM\Entity
 */
class ThematicMap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="thematic_map_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="old_old_old_user_id", type="integer", nullable=false)
     */
    private $oldOldOldUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="datasource_id", type="integer", nullable=false)
     */
    private $datasourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldname", type="string", length=255, nullable=false)
     */
    private $fieldname;

    /**
     * @var string
     *
     * @ORM\Column(name="gradient", type="string", length=255, nullable=false)
     */
    private $gradient;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="text", nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="categories", type="text", nullable=false)
     */
    private $categories;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @var integer
     *
     * @ORM\Column(name="seq", type="integer", nullable=true)
     */
    private $seq;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_zoom", type="integer", nullable=true)
     */
    private $minZoom;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_zoom", type="integer", nullable=true)
     */
    private $maxZoom;

    /**
     * @var string
     *
     * @ORM\Column(name="layer_title", type="string", length=250, nullable=true)
     */
    private $layerTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="layer_name", type="string", length=250, nullable=false)
     */
    private $layerName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="default_show_on_map", type="boolean", nullable=true)
     */
    private $defaultShowOnMap;

    /**
     * @var guid
     *
     * @ORM\Column(name="user_id", type="guid", nullable=true)
     */
    private $userId;

    /**
     * @var guid
     *
     * @ORM\Column(name="old_user_id", type="guid", nullable=true)
     */
    private $oldUserId;

    /**
     * @var guid
     *
     * @ORM\Column(name="old_old_user_id", type="guid", nullable=true)
     */
    private $oldOldUserId;


}
