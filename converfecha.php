<!DOCTYPE html>
<html>
<body>

<h1>Convirtiendo fechas UNIX a formato dd/MM/YY</h1>

<p>
<?php
echo date('Y-m-d H:i:s', 1400618310);
echo ('<br>');
echo date('Y-m-d H:i:s',  1400690560);
echo ('<br>');
$email = '';
if (!empty($email))
	echo 'Activado';
else
	echo 'Desactivado';
	echo ('<br>');
$str = 'apple';

if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Would you like a green or red apple?";
	}else{echo "NONO";}
	echo ('<br>');
	$str="172162";
	$clave = sha1($str);
	echo "La clave es:".$clave;
?>



</p>

</body>
</html>

