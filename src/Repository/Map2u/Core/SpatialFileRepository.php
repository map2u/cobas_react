<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\Map2u\Core;

use App\Entity\Map2u\Core\SpatialFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * This custom Doctrine repository is empty because so far we don't need any custom
 * method to query for application user information. But it's always a good practice
 * to define a custom repository that will be used when the application grows.
 *

 * @author Joseph Zhao <zhaoshuilin2004@gmail.com>
 */
class SpatialFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }
}
