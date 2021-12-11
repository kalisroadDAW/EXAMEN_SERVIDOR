<?php

class Coche
{
    //Variables o atributos
    private int $motor;
    private int $puertas;
    private int $ruedas;
    private string $volante;
    

    function __construct($miMotor,$miPuertas,$miRuedas,$miVolante ){

        $this->motor = $miMotor;
        $this->puertas = $miPuertas;
        $this->ruedas = $miRuedas;
        $this->volante = $miVolante;
       
       

    }

    //Funciones o métodos
    function setPuertas($miPuertas){

        $this->puertas = $miPuertas;

    }

    function getPuertas(){

        return $this->puertas;

    }

    function setVolante($miVolante){

        $this->volante = $miVolante;

    }

    function getVolante(){

        return $this->volante;

    }

    function setRuedas($miRuedas){

        $this->ruedas = $miRuedas;

    }

    function getRuedas(){

        return $this->ruedas;

    }

    

    function setMotor($miMotor){

        $this->motor = $miMotor;

    }

    function getMotor(){

        return $this->motor;

    }
}