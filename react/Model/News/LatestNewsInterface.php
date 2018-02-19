<?php

namespace Map2u\CoreBundle\Model\News;

use Ibrows\Bundle\NewsletterBundle\Model\Block\BlockInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Subscriber\SubscriberInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Design\DesignInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Newsletter\SendSettingsInterface;
use Doctrine\Common\Collections\Collection;

interface LatestNewsInterface {

  public function getName();

  /**
   * @return \DateTime
   */
  public function getCreatedAt();

  /**
   * @return MandantInterface
   */
  public function getMandant();

  public function getSubject();

  public function getSenderMail();

  public function getSenderName();

  public function getReturnMail();

  public function getId();

  public function getHash();

  /**
   * @return SubscriberInterface[]
   */
  public function getSubscribers();

  /**
   * @return SendSettingsInterface[]
   */
  public function getSendSettings();

  /**
   * @param SendSettingsInterface $settings
   * @return NewsletterInterface
   */
  public function setSendSettings(SendSettingsInterface $settings);

  /**
   * @return BlockInterface[]
   */
  public function getBlocks();

  /**
   * @param BlockInterface $block
   * @return NewsletterInterface
   */
  public function addBlock(BlockInterface $block);

  /**
   * @param BlockInterface $block
   * @return NewsletterInterface
   */
  public function removeBlock(BlockInterface $block);

  /**
   * @return DesignInterface
   */
  public function getDesign();
}
