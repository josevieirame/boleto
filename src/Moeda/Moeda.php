<?php
namespace Vieira\Boleto\Moeda;

interface Moeda
{
    /**
     * @return string Retorna a string da moeda
     */
    public function toString();
}