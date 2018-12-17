<?php declare(strict_types=1);

/*
 * This file is part of the Sericode Framework.
 *
 * (c) Sericode
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sericode\Contracts\Foundation;

interface Application
{
    /**
     * Get the application name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the application version.
     *
     * @return string
     */
    public function getVersion(): string;
}
