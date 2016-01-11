<?php
namespace Vieira\Boleto\Moeda\Contratos;

interface Moeda
{
    /**
     * @return int Retorna o código da moeda
     */
    function getCodigo();

    /**
     * @return string Retorna a string da moeda
     */
    function getEspecie();
}