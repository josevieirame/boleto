<?php

namespace Vieira\Boleto\Banco;

class Calculo
{
    /**
     * Calcula e retorna o dígito verificador usando o algoritmo Modulo 10
     *
     * @param string $num
     * @see Documentação em http://www.febraban.org.br/Acervo1.asp?id_texto=195&id_pagina=173&palavra=
     * @return int
     */
    public static function modulo10($num)
    {
        $numeroTotal10 = 0;
        $fator = 2;

        //  Separacao dos numeros.
        for ($i = strlen($num); $i > 0; $i--) {
            //  Pega cada numero isoladamente.
            $numeros[$i] = substr($num,$i-1,1);

            //  Efetua multiplicacao do numero pelo (falor 10).
            $temp = $numeros[$i] * $fator;
            $temp0 = 0;
            foreach (preg_split('// ',$temp,-1,PREG_SPLIT_NO_EMPTY) as $v) {
                $temp0+=$v;
            }

            $parcial10[$i] = $temp0;

            //  Monta sequencia para soma dos digitos no (modulo 10).
            $numeroTotal10 += $parcial10[$i];
            $fator = ($fator == 2) ? 1 : 2;
        }

        $remainder  = $numeroTotal10 % 10;
        $digito = 10 - $remainder;

        $digito = ($digito == 10) ? 0 : $digito;

        return $digito;
    }

    /**
     * Calcula e retorna o dígito verificador usando o algoritmo Modulo 11
     *
     * @param string $num
     * @param int $base
     * @see Documentação em http://www.febraban.org.br/Acervo1.asp?id_texto=195&id_pagina=173&palavra=
     * @return array Retorna um array com as chaves 'digito' e 'resto'
     */
    public static function modulo11($num, $base=9)
    {
        $fator = 2;

        $soma  = 0;

        // Separacao dos numeros.
        for ($i = strlen($num); $i > 0; $i--) {
            //  Pega cada numero isoladamente.
            $numeros[$i] = substr($num,$i-1,1);
            //  Efetua multiplicacao do numero pelo falor.
            $parcial[$i] = $numeros[$i] * $fator;
            //  Soma dos digitos.
            $soma += $parcial[$i];
            if ($fator == $base) {
                //  Restaura fator de multiplicacao para 2.
                $fator = 1;
            }
            $fator++;
        }

        $digito = (($soma * 10) % 11 == 10) ? 0 : ($soma * 10) % 11;
        $resto = $soma % 11;

        return compact('digito', 'resto');
    }
}
