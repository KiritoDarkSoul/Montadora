<?php

namespace Montadora\Volante;

use MOntadora\Volante\InterfaceVolante;

require_once 'InterfaceVolante.php';

class VolanteComun implements InterfaceVolante
{
    private $direcao;
    
    public function girar($direcao) 
    {
        $this->direcao = $direcao;
    }
    
}


