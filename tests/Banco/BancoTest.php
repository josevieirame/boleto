<?php

namespace Vieira\Boleto\Test\Banco;


use Vieira\Boleto\Banco\Banco;
use Vieira\Boleto\Banco\Caixa;

class BancoTest extends \PHPUnit_Framework_TestCase
{
    public function testCaixaIsABank()
    {
        $caixa = new Caixa();

        self::assertInstanceOf(Banco::class, $caixa);
    }
}
