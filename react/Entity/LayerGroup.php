<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LayerGroup
 */
class LayerGroup
{
    /**
     * @var guid
     */
    private $layer_uuid;

    /**
     * @var guid
     */
    private $group_uuid;


    /**
     * Set layer_uuid
     *
     * @param guid $layerUuid
     * @return LayerGroup
     */
    public function setLayerUuid($layerUuid)
    {
        $this->layer_uuid = $layerUuid;

        return $this;
    }

    /**
     * Get layer_uuid
     *
     * @return guid 
     */
    public function getLayerUuid()
    {
        return $this->layer_uuid;
    }

    /**
     * Set group_uuid
     *
     * @param guid $groupUuid
     * @return LayerGroup
     */
    public function setGroupUuid($groupUuid)
    {
        $this->group_uuid = $groupUuid;

        return $this;
    }

    /**
     * Get group_uuid
     *
     * @return guid 
     */
    public function getGroupUuid()
    {
        return $this->group_uuid;
    }
    /**
     * @var guid
     */
    private $id;


    /**
     * Set id
     *
     * @param guid $id
     * @return LayerGroup
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId()
    {
        return $this->id;
    }
}
