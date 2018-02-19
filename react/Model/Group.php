<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Sonata Project <https://github.com/sonata-project/SonataClassificationBundle/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Map2u\CoreBundle\Model;

use Map2u\CoreBundle\Model\GroupInterface;
use Application\Sonata\UserBundle\Entity\User;
use Map2u\CoreBundle\Controller\DefaultMethods;

abstract class Group implements GroupInterface {

    protected $id;
    protected $name;
    protected $enabled;
    protected $loginName;
    protected $address;
    protected $phoneNumber;
    protected $faxNumber;
    protected $groupId;
    protected $group;
    protected $email;
    protected $wrongLoginTimes;
    protected $lastLoginIP;
    protected $groupPasswordSalt;
    protected $locked;
    protected $lastLoginAt;
    protected $allowedGroupLogin;
    protected $lockedAt;
    protected $lockedIP;
    protected $loginIP;
    protected $allowedLoginIP;
    protected $loginAt;
    protected $description;
    protected $groupPassword;
    protected $groupAdmin;
    protected $sendLoginNotice;
    protected $createdAt;
    protected $updatedAt;
    protected $expiredAt;
    protected $users;

    /**
     * Constructor
     */
    public function __construct() {
        $this->id = DefaultMethods::gen_uuid();
    }

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupAdmin() {
        return $this->groupAdmin;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupAdmin(User $groupAdmin = null) {
        $this->groupAdmin = $groupAdmin;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * {@inheritdoc}
     */
    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setFaxNumber($faxNumber) {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFaxNumber() {
        return $this->faxNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setLoginName($loginName) {
        $this->loginName = $loginName;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLoginName() {
        return $this->loginName;
    }

    /**
     * {@inheritdoc}
     */
    public function setWrongLoginTimes($wrongLoginTimes) {
        $this->wrongLoginTimes = $wrongLoginTimes;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWrongLoginTimes() {
        return $this->wrongLoginTimes;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocked($locked) {
        $this->locked = $locked;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLocked() {
        return $this->locked;
    }

    /**
     * {@inheritdoc}
     */
    public function setLockedAt(\DateTime $lockedAt) {
        $this->lockedAt = $lockedAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLockedAt() {
        return $this->lockedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setLockedIP($lockedIP) {
        $this->lockedIP = $lockedIP;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLockedIP() {
        return $this->lockedIP;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastLoginIP($lastLoginIP) {
        $this->lastLoginIP = $lastLoginIP;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastLoginIP() {
        return $this->lastLoginIP;
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowedLoginIP($allowedLoginIP) {
        $this->allowedLoginIP = $allowedLoginIP;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedLoginIP() {
        return $this->allowedLoginIP;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupPassword($groupPassword) {
        $this->groupPassword = $groupPassword;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupPassword() {
        return $this->groupPassword;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupPasswordSalt($groupPasswordSalt) {
        $this->groupPasswordSalt = $groupPasswordSalt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupPasswordSalt() {
        return $this->groupPasswordSalt;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastLoginAt(\DateTime $lastLoginAt) {
        $this->lastLoginAt = $lastLoginAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastLoginAt() {
        return $this->lastLoginAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setPasswordResetSalt($passwordResetSalt) {
        $this->passwordResetSalt = $passwordResetSalt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPasswordResetSalt() {
        return $this->passwordResetSalt;
    }

    /**
     * {@inheritdoc}
     */
    public function setPasswordResetSaltCreatedAt(\DateTime $passwordResetSaltCreatedAt) {
        $this->passwordResetSaltCreatedAt = $passwordResetSaltCreatedAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPasswordResetSaltCreatedAt() {
        return $this->passwordResetSaltCreatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowGroupLogin($allowGroupLogin) {
        $this->allowGroupLogin = $allowGroupLogin;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowGroupLogin() {
        return $this->allowGroupLogin;
    }

    /**
     * {@inheritdoc}
     */
    public function setSendLoginNotice($sendLoginNotice) {
        $this->sendLoginNotice = $sendLoginNotice;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSendLoginNotice() {
        return $this->sendLoginNotice;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setExpiredAt($expiredAt) {
        $this->expiredAt = $expiredAt;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExpiredAt() {
        return $this->expiredAt;
    }

    public function prePersist() {
        
    }

    public function preUpdate() {
        
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupId($groupId) {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupId() {
        return $this->groupId;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroup($group) {
        $this->group = $group;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroup() {
        return $this->group;
    }

}
