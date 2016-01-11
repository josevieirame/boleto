<?php

namespace Vieira\Boleto\Banco;

abstract class Banco
{
    /**
     * Moedas disponíveis
     */
    const MOEDA_REAL = 9;


    /**
     * @var array Nome espécie das moedas
     */
    protected static $especie = array(
        self::MOEDA_REAL => 'REAL'
    );

    /**
     * Código do banco
     * @var string
     */
    protected $codigo;

    /**
     * O path completo do arquivo de layout a ser usado
     * @var string
     */
    protected $layout = __DIR__ . DIRECTORY_SEPARATOR . 'default.phtml';

    /**
     * O path completo do arquivo da logo a ser usado
     * @var string
     */
    protected $logo = __DIR__ . DIRECTORY_SEPARATOR . 'logo.png';

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}

