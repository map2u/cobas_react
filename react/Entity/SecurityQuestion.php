<?php

namespace Map2u\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * SecurityQuestion
 */
class SecurityQuestion {

    use ORMBehaviors\Translatable\Translatable;

    /**
     * @var guid
     */
    protected $id;

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId() {
        return $this->id;
    }

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
        $this->getLocale();
        if (method_exists($this, "translate")) {
            if (isset($this->locale) && $this->locale !== null && strlen(trim($this->locale)) > 1) {
                $this->name = $this->translate($this->locale)->getName();
            } else {
                $this->name = $this->translate('en')->getName();
            }
        }
        return $this->name;
    }

    public function getLocale() {

        return $this->locale = locale_get_default();
    }

}
