<?php
namespace Vieira\Boleto\Moeda;

use Vieira\Boleto\Moeda\Contratos\Moeda;

class Real implements Moeda
{
    /**
     * @return int Retorna o código da moeda
     */
    function getCodigo()
    {
        return 1;
    }

    /**
     * @return string Retorna a string da moeda
     */
    function getEspecie()
    {
        return "dinheiro";
    }
}