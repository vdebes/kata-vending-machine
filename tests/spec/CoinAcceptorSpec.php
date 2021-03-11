<?php

namespace tests\spec;

use CoinAcceptor;
use PhpSpec\ObjectBehavior;

class CoinAcceptorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CoinAcceptor::class);
    }
}
