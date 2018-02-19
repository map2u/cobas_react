<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LayerDisplaySequence
 */
class LayerDisplaySequence
{
    /**
     * @var guid
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $default = true;

    /**
     * @var string
     */
    private $sequence;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return guid 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return LayerDisplaySequence
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set default
     *
     * @param boolean $default
     * @return LayerDisplaySequence
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return boolean 
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set sequence
     *
     * @param string $sequence
     * @return LayerDisplaySequence
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return string 
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return LayerDisplaySequence
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var string
     */
    private $selectedAction;


    /**
     * Set selectedAction
     *
     * @param string $selectedAction
     * @return LayerDisplaySequence
     */
    public function setSelectedAction($selectedAction)
    {
        $this->selectedAction = $selectedAction;

        return $this;
    }

    /**
     * Get selectedAction
     *
     * @return string 
     */
    public function getSelectedAction()
    {
        return $this->selectedAction;
    }
}
