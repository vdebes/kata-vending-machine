<?php


namespace vendingMachine\tests\domain;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;
use vdebes\vendingMachine\CoinAcceptor;
use vdebes\vendingMachine\Display;

class CoinAcceptorTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public function test(): void
    {
        // wait for coins
        $display = \Mockery::mock(Display::class);
        $display->expects('display')->once()->withArgs(['Insert coins']);

        $coinValidator = \Mockery::mock(CoinValidator::class);
        $coinValidator->expects('validateCoin')->once();

        $coinAcceptor = new CoinAcceptor($display);
        self::assertInstanceOf(CoinAcceptor::class, $coinAcceptor);

        // receives coins
        $coinAcceptor->receiveCoins(10);

        // accepts or rejects coins
        // display total credit amount
    }
}
