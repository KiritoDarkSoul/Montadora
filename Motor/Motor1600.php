<?php

namespace Ford\Motor;

use Montadora\Motor\Motor;

class Motor1600 extends Motor
{
    private $cilindrada = 1600;
    
    public function gatCilindrada()
    {
        return $this->cilindrada;
    }
        public function getCilindrada() 
    {
        return (1400);
    }

}
