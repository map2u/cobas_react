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

use Application\Sonata\UserBundle\Entity\User;

interface GroupInterface {

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId();

    /**
     * Set id
     *
     * @param guid $id
     * @return mixed
     */
    public function setId($id);

    /**
     * Get groupAdmin
     *
     * @return User $groupAdmin
     */
    public function getGroupAdmin();

    /**
     * Set groupAdmin
     *
     * @param User $groupAdmin
     */
    public function setGroupAdmin(User $groupAdmin = null);

    /**
     * Set name
     *
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Set address
     *
     * @param string $address
     * @return mixed
     */
    public function setAddress($address);

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress();

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return mixed
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber();

    /**
     * Set faxNumber
     *
     * @param string $faxNumber
     * @return mixed
     */
    public function setFaxNumber($faxNumber);

    /**
     * Get faxNumber
     *
     * @return string 
     */
    public function getFaxNumber();

    /**
     * Set email
     *
     * @param string $email
     * @return mixed
     */
    public function setEmail($email);

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail();

    /**
     * Set loginName
     *
     * @param string $loginName
     * @return mixed
     */
    public function setLoginName($loginName);

    /**
     * Get loginName
     *
     * @return string 
     */
    public function getLoginName();

    /**
     * Set wrongLoginTimes
     *
     * @param integer $wrongLoginTimes
     * @return mixed
     */
    public function setWrongLoginTimes($wrongLoginTimes);

    /**
     * Get wrongLoginTimes
     *
     * @return integer 
     */
    public function getWrongLoginTimes();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return mixed
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled();

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return mixed
     */
    public function setLocked($locked);

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked();

    /**
     * Set lockedAt
     *
     * @param \DateTime $lockedAt
     * @return mixed
     */
    public function setLockedAt(\DateTime $lockedAt);

    /**
     * Get lockedAt
     *
     * @return \DateTime 
     */
    public function getLockedAt();

    /**
     * Set lockedIP
     *
     * @param string $lockedIP
     * @return mixed
     */
    public function setLockedIP($lockedIP);

    /**
     * Get lockedIP
     *
     * @return string 
     */
    public function getLockedIP();

    /**
     * Set lastLoginIP
     *
     * @param string $lastLoginIP
     * @return mixed
     */
    public function setLastLoginIP($lastLoginIP);

    /**
     * Get lastLoginIP
     *
     * @return string 
     */
    public function getLastLoginIP();

    /**
     * Set allowedLoginIP
     *
     * @param json $allowedLoginIP
     * @return mixed
     */
    public function setAllowedLoginIP($allowedLoginIP);

    /**
     * Get allowedLoginIP
     *
     * @return json 
     */
    public function getAllowedLoginIP();

    /**
     * Set groupPassword
     *
     * @param string $groupPassword
     * @return mixed
     */
    public function setGroupPassword($groupPassword);

    /**
     * Get groupPassword
     *
     * @return string 
     */
    public function getGroupPassword();

    /**
     * Set groupPasswordSalt
     *
     * @param string $groupPasswordSalt
     * @return mixed
     */
    public function setGroupPasswordSalt($groupPasswordSalt);

    /**
     * Get groupPasswordSalt
     *
     * @return string 
     */
    public function getGroupPasswordSalt();

    /**
     * Set lastLoginAt
     *
     * @param \DateTime $lastLoginAt
     * @return mixed
     */
    public function setLastLoginAt(\DateTime $lastLoginAt);

    /**
     * Get lastLoginAt
     *
     * @return \DateTime 
     */
    public function getLastLoginAt();

    /**
     * Set passwordResetSalt
     *
     * @param string $passwordResetSalt
     * @return mixed
     */
    public function setPasswordResetSalt($passwordResetSalt);

    /**
     * Get passwordResetSalt
     *
     * @return string 
     */
    public function getPasswordResetSalt();

    /**
     * Set passwordResetSaltCreatedAt
     *
     * @param \DateTime $passwordResetSaltCreatedAt
     * @return mixed
     */
    public function setPasswordResetSaltCreatedAt(\DateTime $passwordResetSaltCreatedAt);

    /**
     * Get passwordResetSaltCreatedAt
     *
     * @return \DateTime 
     */
    public function getPasswordResetSaltCreatedAt();

    /**
     * Set allowGroupLogin
     *
     * @param boolean $allowGroupLogin
     * @return mixed
     */
    public function setAllowGroupLogin($allowGroupLogin);

    /**
     * Get allowGroupLogin
     *
     * @return boolean 
     */
    public function getAllowGroupLogin();

    /**
     * Set sendLoginNotice
     *
     * @param boolean $sendLoginNotice
     * @return mixed
     */
    public function setSendLoginNotice($sendLoginNotice);

    /**
     * Get sendLoginNotice
     *
     * @return boolean 
     */
    public function getSendLoginNotice();

    /**
     * Set description
     *
     * @param string $description
     * @return mixed
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return mixed
     */
    public function setCreatedAt($createdAt);

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt();

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return mixed
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt();

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     * @return mixed
     */
    public function setExpiredAt($expiredAt);

    /**
     * Get expiredAt
     *
     * @return \DateTime 
     */
    public function getExpiredAt();

    /**
     * Set groupId
     *
     * @param guid $groupId
     * @return mixed
     */
    public function setGroupId($groupId);

    /**
     * Get groupId
     *
     * @return guid 
     */
    public function getGroupId();

    /**
     * Set group
     *
     * @param \Application\Sonata\UserBundle\Entity\User $group
     * @return mixed
     */
    public function setGroup($group);

    /**
     * Get expiredAt
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getGroup();
}
