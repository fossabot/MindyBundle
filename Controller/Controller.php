<?php

declare(strict_types=1);

/*
 * This file is part of Mindy Framework.
 * (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mindy\Bundle\MindyBundle\Controller;

use Mindy\Bundle\PaginationBundle\Utils\PaginationTrait;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

if (trait_exists(PaginationTrait::class)) {
    /**
     * Class Controller
     *
     * @deprecated since 4.0
     */
    abstract class Controller extends BaseController
    {
        use PaginationTrait;
    }
} else {
    /**
     * Class Controller
     *
     * @deprecated since 4.0
     */
    abstract class Controller extends BaseController
    {
    }
}
