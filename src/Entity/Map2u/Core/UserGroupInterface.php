<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Map2u\Core;

use Symfony\Component\Security\Core\Role\Role;

/**
 * Represents the interface that all user classes must implement.
 *
 * This interface is useful because the authentication layer can deal with
 * the object through its lifecycle, using the object to get the encoded
 * password (for checking against a submitted password), assigning roles
 * and so on.
 *
 * Regardless of how your user are loaded or where they come from (a database,
 * configuration, web service, etc), you will have a class that implements
 * this interface. Objects that implement this interface are created and
 * loaded by different objects that implement UserProviderInterface
 *
 * @see UserProviderInterface
 * @see AdvancedUserInterface
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface UserGroupInterface
{
    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return string
     */
    public function getName();

}
