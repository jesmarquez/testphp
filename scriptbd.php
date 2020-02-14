<?php
$mysqli = new mysqli('localhost', 'root', '', 'respaldo_practicas');
$mysqlir = new mysqli('localhost','root', '','practicas');

/*
 * Esta es la forma OO "oficial" de hacerlo,
 * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
 */
if ($mysqlir->connect_error) {
	die('Error de conexionr ('. $mysqlir->connect_errno. ')'
			 . $mysqlir->connect_error);
}
 
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}else{
	echo "Lista la conexion";

	if ($result = $mysqli->query("SELECT * FROM Asesoria"))
	{
		echo '<br>';
		echo '<br>';
		printf("Tabla Asesoría total %d filas.\n\n", $result->num_rows);
		echo '<br>';
		echo '<br>';
		while($row = $result->fetch_assoc())
		{
			$query = "INSERT INTO Asesoria  (practicante, academico, docAsesor1, docPracticante1 )".
							' VALUES ("'.$row["practicante"].'","'.$row["academico"].'","'.$row["docAsesor1"].'","'.$row["docPracticante1"].'")';
							
			if ($mysqlir->query($query) === TRUE){
				printf("Exitoso copia asesoria 1!");
				echo '<br>';
			} else {
				printf("Fallo 1");
			}
			
			$query = "INSERT INTO Asesoria2  (practicante, academico, docAsesor2, docPracticante2 )".
							' VALUES ("'.$row["practicante"].'","'.$row["academico"].'","'.$row["docAsesor2"].'","'.$row["docPracticante2"].'")';
							
			if ($mysqlir->query($query) === TRUE){
				printf("Exitoso copia asesoria 2!");
				echo '<br>';
			} else{
				printf ("Fallo 2");
				echo '<br>';
			}
			$query = "INSERT INTO Asesoria3  (practicante, academico, docAsesor3, docPracticante3 )".
							' VALUES ("'.$row["practicante"].'","'.$row["academico"].'","'.$row["docAsesor3"].'","'.$row["docPracticante3"].'")';
			if ($mysqlir->query($query) === TRUE){
				printf("Exitoso copia asesoria 3!");
				echo '<br>';
			}	else {
				printf ("Fallo 3");
				echo '<br>';
			}
			$query = "INSERT INTO Asesoria4  (practicante, academico, docAsesor4, docPracticante4 )".
							' VALUES ("'.$row["practicante"].'","'.$row["academico"].'","'.$row["docAsesor4"].'","'.$row["docPracticante4"].'")';
			if ($mysqlir->query($query) === TRUE){
				printf("Exitoso copia asesoria 4!");
				echo '<br>';
			}	else {
				printf ("Fallo 4");
				echo '<br>';
			}
			
			$query = "INSERT INTO Asesoria5  (practicante, academico, docAsesor5, docPracticante5 )".
							' VALUES ("'.$row["practicante"].'","'.$row["academico"].'","'.$row["docAsesor5"].'","'.$row["docPracticante5"].'")';
			if ($mysqlir->query($query) === TRUE){
				printf("Exitoso copia asesoria 5!");
				echo '<br>';
			}	else {
				printf ("Fallo 5");
				echo '<br>';
			}
		
			$query = "INSERT INTO Asesoria6  (practicante, academico, docAsesor6, docPracticante6 )".
							' VALUES ("'.$row["practicante"].'","'.$row["academico"].'","'.$row["docAsesor6"].'","'.$row["docPracticante6"].'")';
			if ($mysqlir->query($query) === TRUE){
				printf("Exitoso copia asesoria 6!");
				echo '<br>';
			}	else {
				printf ("Fallo 6");
				echo '<br>';
			}
			
			$query = "INSERT INTO Asesoria7  (practicante, academico, docAsesor7, docPracticante7 )".
							' VALUES ("'.$row["practicante"].'","'.$row["academico"].'","'.$row["docAsesor7"].'","'.$row["docPracticante7"].'")';
			if ($mysqlir->query($query) === TRUE){
				printf("Exitoso copia asesoria 7!");
				echo '<br>';
			}	else {
				printf ("Fallo 7");
				echo '<br>';
			}
			//printf ("(%s) (%s) (%s) (%s)\n",$row["id"],$row["practicante"], $row["academico"], $row["docAsesor1"]);
			//printf("%s",$query);
		
			
		}
		
	}
		
		
		/* free result set */
		$result->free();
		$mysqli->close();
		$mysqlir->close();
	
}

?>