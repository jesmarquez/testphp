<?php
	$fp = fopen("conduit.log", "a+");
	$reglog = "503 update user".PHP_EOL;
	fwrite($fp, $reglog);
	fclose($fp);
	echo "Ready!";
?>