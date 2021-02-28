<?php

namespace vendingMachine\unit\tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;
use vdebes\vendingMachine\Foo;

class FooTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public function testBar(): void
    {
        $foo = new Foo();
        self::assertTrue($foo->bar());
    }
}
