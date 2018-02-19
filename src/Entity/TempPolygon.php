<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempPolygon
 *
 * @ORM\Table(name="temp_polygon")
 * @ORM\Entity
 */
class TempPolygon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="temp_polygon_gid_seq", allocationSize=1, initialValue=1)
     */
    private $gid;

    /**
     * @var string
     *
     * @ORM\Column(name="watershed_name", type="string", length=50, nullable=true)
     */
    private $watershedName;

    /**
     * @var string
     *
     * @ORM\Column(name="subwatershed_name", type="string", length=50, nullable=true)
     */
    private $subwatershedName;

    /**
     * @var geometry
     *
     * @ORM\Column(name="the_geom", type="geometry", nullable=true)
     */
    private $theGeom;


}
