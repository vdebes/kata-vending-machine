<?php


namespace vdebes\vendingMachine;


class CoinAcceptor
{
    public function __construct(Display $display)
    {
        $display->display('Insert coins');
    }

    public function receiveCoins(int $int)
    {
    }
}
