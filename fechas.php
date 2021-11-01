<?php

date_default_timezone_set('America/Bogota');


// try {

//     //$fecha = new DateTime('2000-01-01');
// 	$fecha = new DateTime();
// } catch (Exception $e) {
//     echo $e->getMessage();
//     exit(1);
// }
	
// echo $fecha->format('Y/m/d');



// $fecha ="14/24/02";
// $separa = explode("/",$fecha);
// $ano = $separa[0];
// $dia = $separa[1];
// $mes = $separa[2];

// echo "</br>".$ano.$mes.$dia."\n";

// $otrafecha = new DateTime();
// $otrafecha->setDate($ano,$mes,$dia);

// echo $otrafecha->format('d/m/Y H:i:s') . "\n";

// echo "</br>";
// echo "HOY";
// echo "</br>";
// $hoy = new DateTime('NOW');
// $hoy->setTime(0,0,0);
// echo $hoy->format('d/m/Y H:i:s');

// echo "</br>";
// echo "AYER";
// echo "</br>";
// $yesterday = new DateTime('7/20/2021');
// $hora = 10;
// $hora++;
// $yesterday->setTime($hora, 30);
// echo $yesterday->format('d/m/Y H:i:s');
// $hora++;
// $yesterday->setTime($hora, 30);
// echo "</br>";
// echo $yesterday->format('d/m/Y H:i:s');

// $origin = new DateTime('2009-10-11');
// $target = new DateTime('2009-10-13');
// $interval = $origin->diff($target);
// echo $interval->format('%R%a days');


$hoy = new DateTime('NOW');
echo $hoy->format('Y');
?>