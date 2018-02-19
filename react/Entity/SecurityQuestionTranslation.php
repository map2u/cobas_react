<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * SecurityQuestionTranslation
 */
class SecurityQuestionTranslation {

    use ORMBehaviors\Translatable\Translation;

    /**
     * @var string
     */
    private $name;

    /**
     * Set name
     *
     * @param string $name
     * @return SecurityQuestionTranslation
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

}
