<?php

namespace Vieira\Boleto\Test\Banco;

use Vieira\Boleto\Banco\Banco;
use Vieira\Boleto\Banco\Caixa;

class CaixaTest extends \PHPUnit_Framework_TestCase
{
    public function testDeveInstanciarUmBancoCaixa()
    {
        $caixa = new Caixa();
        self::assertInstanceOf(Banco::class, $caixa);
    }
}
