<?php
namespace Vieira\Boleto\Moeda\Contratos;

interface Moeda
{
    /**
     * @return string Retorna a string da moeda
     */
    public function toString();
}