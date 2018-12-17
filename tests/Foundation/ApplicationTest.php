<?php declare(strict_types=1);

/*
 * This file is part of the Sericode Framework.
 *
 * (c) Sericode
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sericode\Tests;

use PHPUnit\Framework\TestCase;
use Sericode\Foundation\Application;

class ApplicationTest extends TestCase
{
    public function testGetSetName()
    {
        $app = new Application;

        $app->setName('Sericode');

        $this->assertSame('Sericode', $app->getName());
    }

    public function testGetSetVersion()
    {
        $app = new Application;

        $app->setVersion('dev-master');

        $this->assertSame('dev-master', $app->getVersion());
    }
}
