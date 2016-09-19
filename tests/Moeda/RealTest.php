<?php

namespace Moeda;

use Vieira\Boleto\Moeda\Moeda;
use Vieira\Boleto\Moeda\Real;

class RealTest extends \PHPUnit_Framework_TestCase
{
    public function testDeveInstanciarUmaMoedaReal()
    {
        $real = new Real();
        self::assertInstanceOf(Moeda::class, $real);
    }
}
