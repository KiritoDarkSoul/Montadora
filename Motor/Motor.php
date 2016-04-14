<?php

namespace Ford\Motor;

/**
 * Modelo base do motor
 * @author John Doe <john.doe@example.com>
 * @link http://www.google.com
 */
abstract class Motor
{
    private $combustivel = "Gasolina";
    protected $aceleracao = 0;
    private $ligado = false;
    
    /**
     * Liga ou desliga o motor
     * @return bool
     */
    public function ligar()
    {
        $this->ligado = !$this->ligado;
        return $this->ligado;
    }
    /**
     * Acelera o motor
     * @param int $potencia
     * @return int Combustivel gasto
     */
    public function acelerar($potencia)
    {
        $this->aceleracao = $potencia;
        $gasto = $potencia * $this->gatCilindrada();
        return $gasto / 1000;
    }
    
    abstract public function getCilindrada();
}