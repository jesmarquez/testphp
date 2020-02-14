<?php
  $fecha_str ="21-12-2017";
  $fecha_unix = strtotime($fecha_str);
  printf("fecha unix:%d \n", $fecha_unix);

  $fecha_hoy_unix = time();
  $fecha_hoy_str = date('d-m-Y', $fecha_hoy_unix);
  printf("Fecha hoy:%s \n", $fecha_hoy_str);
?>
