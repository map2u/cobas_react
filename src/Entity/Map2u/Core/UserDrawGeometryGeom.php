<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserdrawgeometriesGeom
 *
 * @ORM\Table(name="userdrawgeometries_geom", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_1811b9cece89a2bd", columns={"old_userdrawgeometries_id"})})
 * @ORM\Entity
 */
class UserDrawGeometryGeom
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
    */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="old_userdrawgeometries_id", type="integer", nullable=true)
     */
    private $oldUserdrawgeometriesId;

    /**
     * @var geometry
     *
     * @ORM\Column(name="the_geom", type="geometry", nullable=true)
     */
    private $theGeom;

    /**
     * @var guid
     *
     * @ORM\Column(name="userdrawgeometries_id", type="guid", nullable=true)
     */
    private $userdrawgeometriesId;

    public function getId() {
        return $this->id;
    }

    public function getOldUserdrawgeometriesId() {
        return $this->oldUserdrawgeometriesId;
    }

    public function getTheGeom(): geometry {
        return $this->theGeom;
    }

    public function getUserdrawgeometriesId(): guid {
        return $this->userdrawgeometriesId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setOldUserdrawgeometriesId($oldUserdrawgeometriesId) {
        $this->oldUserdrawgeometriesId = $oldUserdrawgeometriesId;
    }

    public function setTheGeom(geometry $theGeom) {
        $this->theGeom = $theGeom;
    }

    public function setUserdrawgeometriesId(guid $userdrawgeometriesId) {
        $this->userdrawgeometriesId = $userdrawgeometriesId;
    }


}
