<?php

namespace Montadora;

use Montadora\Carro;

class Pickup extends Carro
{
    const ANO_FABRICACAO = 2017;
    
    static public $capacidade = 300;
    
    
     public function ligar()
    {
        parent::ligar();
        
        echo "\n To ligado \n";
        
        echo self::$capacidade;
    }
}