<?php
namespace Vieira\Boleto\Banco;

use Vieira\Boleto\Moeda\Moeda;
use Vieira\Boleto\Moeda\Real;

class Caixa extends Banco
{
    /**
     * @var Moeda
     */
    private $moedaEmUso;

    /**
     * Caixa constructor.
     */
    public function __construct()
    {
        $this->moedaEmUso = new Real();
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
        return 151;
    }

    /**
     * @return Moeda
     */
    public function getMoedaEmUso()
    {
        return $this->moedaEmUso;
    }
}
