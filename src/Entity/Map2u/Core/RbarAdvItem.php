<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreRbarAdvItem
 *
 * @ORM\Table(name="map2u_core__rbar_adv_item")
 * @ORM\Entity
 */
class RbarAdvItem
{
    /**
     * @var guid
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="seq", type="string", length=250, nullable=true)
     */
    private $seq;

    /**
     * @var string
     *
     * @ORM\Column(name="icon_class", type="string", length=250, nullable=true)
     */
    private $iconClass;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="text", nullable=true)
     */
    private $images;
    public function getId(): guid {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSeq() {
        return $this->seq;
    }

    public function getIconClass() {
        return $this->iconClass;
    }

    public function getImages() {
        return $this->images;
    }

    public function setId(guid $id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSeq($seq) {
        $this->seq = $seq;
    }

    public function setIconClass($iconClass) {
        $this->iconClass = $iconClass;
    }

    public function setImages($images) {
        $this->images = $images;
    }



}
