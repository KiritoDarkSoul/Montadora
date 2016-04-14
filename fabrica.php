<pre>
<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

use Montadora\Motor\Motor1600;
use Montadora\Motor\MotorTurbo;

use Montadora\Volnate\VolanteComun as Volante;

require_once './Carro.php';
require_once './Pickup.php';
require_once './Motor.php';
require_once './Motor1000.php';
require_once './Motor1600.php';
require_once './MotorTurbo.php';
require_once './VolanteComun.php';


$motor1 = new Montadora\Motor\Motor1000();
$motor2 = new Motor1600();
$motort = new MotorTurbo();


$volante = new Volante();

$carro1 = new Carro($motort, $volante); //*Pode usar motor1 e motor2 e moatort*//
$carro2 = new Carro($motort, $volante); //*Pode usar motor1 e motor2 e moatort*//
$carro2->cor = "branco";


try{

$carro1->abastecer(20);    
$carro1->ligar();
$carro1->acelerar(30);

}  catch (Exception $e)
{
    echo "\n" .$e->getMessage()."\n";
}

var_dump($carro1);



