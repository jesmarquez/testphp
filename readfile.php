<?php
	$file_name = "token.tkn";
	$gestor = fopen($file_name, "r");
	$contenido = fread($gestor, filesize($file_name));
	echo $contenido;
	fclose($gestor);
?>