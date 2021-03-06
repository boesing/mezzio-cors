<?php

declare(strict_types=1);

namespace Mezzio\CorsTest\Configuration;

use Mezzio\Cors\Configuration\RouteConfigurationFactory;
use Mezzio\Cors\Configuration\RouteConfigurationInterface;
use PHPUnit\Framework\TestCase;

final class RouteConfigurationFactoryTest extends TestCase
{
    /**
     * @var RouteConfigurationFactory
     */
    private $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new RouteConfigurationFactory();
    }

    public function testWillInstantiateRouteConfiguration(): void
    {
        $factory  = $this->factory;
        $instance = $factory([]);
        $this->assertInstanceOf(RouteConfigurationInterface::class, $instance);
    }
}
