<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * RightSidebarAdvertItemTranslation
 */
class RightSidebarAdvertItemTranslation {

    use ORMBehaviors\Translatable\Translation;

    /**
     * @var string
     */
    private $title;

    /**
     * Set title
     *
     * @param string $title
     * @return RightSidebarAdvertItemTranslation
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

}
