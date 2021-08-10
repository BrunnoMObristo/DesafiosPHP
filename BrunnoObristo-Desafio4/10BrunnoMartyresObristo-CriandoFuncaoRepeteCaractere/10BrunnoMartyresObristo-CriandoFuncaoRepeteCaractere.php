<?php

class Repete{

    public $resultado = 0;

    public function RepetirCaracteres($texto){

        $resultado = str_repeat($texto, 10);        

        return $resultado;
    }

}