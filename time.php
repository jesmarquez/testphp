<?php
$semanaSiguiente = time() + (7 * 24 * 60 * 60);
                   // 7 días; 24 horas; 60 minutos; 60 segundos
echo 'Ahora:            '. date('Y-m-d') ."<br>";
echo 'Semana Siguiente: '. date('Y-m-d', $semanaSiguiente) ."<br>";
// o usar strtotime():
echo 'Semana Siguiente: '. date('Y-m-d', strtotime('+1 week')) ."<br>";

// fecha hoy
$time_u = strtotime("07-03-2018");
echo $time_u, "<br>";
echo date('d/m/Y', $time_u), "<br>";

// fecha bird
$time_u = strtotime("07-04-2018");
echo $time_u, "<br>";
echo date('d/m/Y', $time_u), "<br>";

echo strval($time_u);

?>