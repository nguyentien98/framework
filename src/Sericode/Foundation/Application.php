<?php declare(strict_types=1);

/*
 * This file is part of the Sericode Framework.
 *
 * (c) Sericode
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sericode\Foundation;

use Sericode\Contracts\Foundation\Application as ApplicationContract;

class Application implements ApplicationContract
{
    protected $name;

    /**
     * Get the application name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the application name.
     *
     * @param  string  $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the application version.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Set the application version.
     *
     * @param  string  $version
     * @return $this
     */
    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }
}
