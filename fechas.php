<?php


try {

    //$fecha = new DateTime('2000-01-01');
	$fecha = new DateTime('07/02/2013');
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}
	
echo $fecha->format('Y/m/d');



$fecha ="14/24/02";
$separa = explode("/",$fecha);
$ano = $separa[0];
$dia = $separa[1];
$mes = $separa[2];

echo "</br>".$ano.$mes.$dia."\n";

$otrafecha = new DateTime();
$otrafecha->setDate($ano,$mes,$dia);

echo $otrafecha->format('d-m-Y') . "\n";

?>