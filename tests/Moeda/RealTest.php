<?php
/**
 * Created by Eliezer.
 * Date: 11/01/2016
 * Time: 19:16
 */

namespace Moeda;


use Vieira\Boleto\Moeda\Contratos\Moeda;
use Vieira\Boleto\Moeda\Real;

class RealTest extends \PHPUnit_Framework_TestCase
{
    public function testRealIsAMoeda()
    {
        $real = new Real();
        self::assertInstanceOf(Moeda::class, $real);
    }
}