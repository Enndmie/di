<?php

declare(strict_types=1);

namespace DaBaiCai\Di\Tests;

use DaBaiCai\Di\Context;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

/**
 * @internal
 * @coversNothing
 */
class ContextTest extends TestCase
{
    public function testHasContainer()
    {
        $this->assertFalse(Context::hasContainer());
    }

    public function testGetContainer()
    {
        $this->assertTrue(Context::getContainer() instanceof ContainerInterface);
    }

    public function testSetContainer()
    {
        Context::setContainer(new Container());
        $this->assertTrue(Context::getContainer() instanceof ContainerInterface);
    }
}
