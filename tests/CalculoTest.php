<?php

namespace Vieira\Boleto\Test;

use Vieira\Boleto\Calculo;

class CalculoTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculoModulo10WithString()
    {
        self::assertEquals(2, Calculo::modulo10('00009274'));
    }

    public function testCalculoModulo10WithInteger()
    {
        self::assertEquals(2, Calculo::modulo10(9274));
    }

    public function testCalculoModulo11WithString()
    {
        self::assertEquals(['digito' => 8, 'resto' => 3], Calculo::modulo11('000091943'));
    }

    public function testCalculoModulo11WithInteger()
    {
        self::assertEquals(['digito' => 8, 'resto' => 3], Calculo::modulo11(91943));
    }

    public function testZeroFill()
    {
        self::assertEquals('0010', Calculo::zeroFill(10, 4));
    }

    /**
     * @expectedException \Exception
     */
    public function testZeroFillMoreDigitsError()
    {
        Calculo::zeroFill(110, 2);
    }
}
