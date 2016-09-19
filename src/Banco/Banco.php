<?php

namespace Vieira\Boleto\Banco;

abstract class Banco
{
    /**
     * O path completo do arquivo de layout a ser usado.
     *
     * @var string
     */
    protected $layout = __DIR__.DIRECTORY_SEPARATOR.'default.phtml';

    /**
     * O path completo do arquivo da logo a ser usado.
     *
     * @var string
     */
    protected $logo = __DIR__.DIRECTORY_SEPARATOR.'logo.png';

    /**
     * @return string
     */
    abstract public function getCodigo();

    /*
     * @return Moeda
     */
    abstract public function getMoedaEmUso();
}
