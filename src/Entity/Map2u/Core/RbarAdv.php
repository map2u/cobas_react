<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map2uCoreRbarAdv
 *
 * @ORM\Table(name="map2u_core__rbar_adv", indexes={@ORM\Index(name="idx_74352223f0422dc1", columns={"sidebarmenu_uuid"}), @ORM\Index(name="idx_74352223dd975ced", columns={"aditem_uuid"})})
 * @ORM\Entity
 */
class RbarAdv
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

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="biding_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $bidingPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="datetime", nullable=true)
     */
    private $expiredAt;

    /**
     * @var \App\Entity\Map2u\Core\RbarAdvItem
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\RbarAdvItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aditem_uuid", referencedColumnName="id")
     * })
     */
    private $aditemUuid;

    /**
     * @var \App\Entity\Map2u\Core\SidebarMenu
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Map2u\Core\SidebarMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sidebarmenu_uuid", referencedColumnName="id")
     * })
     */
    private $sidebarmenuUuid;

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

    public function getPrice() {
        return $this->price;
    }

    public function getBidingPrice() {
        return $this->bidingPrice;
    }

    public function getUpdatedAt(): \DateTime {
        return $this->updatedAt;
    }

    public function getExpiredAt(): \DateTime {
        return $this->expiredAt;
    }

    public function getAditemUuid(): \App\Entity\Map2u\Core\RbarAdvItem {
        return $this->aditemUuid;
    }

    public function getSidebarmenuUuid(): \App\Entity\Map2u\Core\SidebarMenu {
        return $this->sidebarmenuUuid;
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

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setBidingPrice($bidingPrice) {
        $this->bidingPrice = $bidingPrice;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function setExpiredAt(\DateTime $expiredAt) {
        $this->expiredAt = $expiredAt;
    }

    public function setAditemUuid(\App\Entity\Map2u\Core\RbarAdvItem $aditemUuid) {
        $this->aditemUuid = $aditemUuid;
    }

    public function setSidebarmenuUuid(\App\Entity\Map2u\Core\SidebarMenu $sidebarmenuUuid) {
        $this->sidebarmenuUuid = $sidebarmenuUuid;
    }


}
