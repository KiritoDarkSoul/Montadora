<?php

namespace Ford\Motor;

use Montadora\Motor\Motor;

class MotorTurbo extends Motor
{
    /**
     * 
     * @param type $potencia
     * @return type
     */
    public function acelerar($potencia) 
    {
             
        $this->aceleracao = $potencia * 2;
         
        $gasto = $potencia * $this->gatCilindrada();
        return $gasto / 1000;
    }
    
    public function getCilindrada() 
    {
        return (1400);
    }

}
