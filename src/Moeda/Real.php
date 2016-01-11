<?php
namespace Vieira\Boleto\Moeda;

class Real implements Moeda
{
    /**
     * @inheritdoc
     */
    public function getDescricao()
    {
        return "REAL";
    }
}