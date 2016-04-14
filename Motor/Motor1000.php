<?php

namespace Ford\Motor;

use MOntadora\Motor\Motor;

class Motor1000 extends Motor
{
    private $cilindrada = 1000;  
    
    public function gatCilindrada()
    {
        return $this->cilindrada;
    }
        public function getCilindrada() 
    {
        return (1400);
    }

}
