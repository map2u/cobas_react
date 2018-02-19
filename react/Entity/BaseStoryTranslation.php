<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Sonata Project <https://github.com/sonata-project/SonataClassificationBundle/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Map2u\CoreBundle\Entity;

abstract class BaseStoryTranslation {

    /**
     * @var string
     */
    protected $storyName;

    /**
     * @var string
     */
    protected $summary;

    /**
     * @param $storyName
     *
     * @return mixed
     */
    public function setStoryName($storyName) {
        $this->storyName = $storyName;
        return $this;
    }

    /**
     * Get storyName
     *
     * @return string $storyName
     */
    public function getStoryName() {
        return $this->storyName;
    }

    /**
     * Set summary
     *
     * @param string $summary
     */
    public function setSummary($summary) {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }
}
