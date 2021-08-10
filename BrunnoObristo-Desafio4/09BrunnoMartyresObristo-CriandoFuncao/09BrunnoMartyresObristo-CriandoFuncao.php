<?php

class FuncaoFisica{

    public $resultado = 0;

    public function Velocidade($valor1, $valor2){

        $resultado = $valor1 / $valor2;        

        return (int)$resultado;
    }

}