<?php
$resultado = array(
			array(
				"id_beneficio"	=> "1",
				"nombre"		=> "Asistencia médica por accidente",
				"planes"		=> array(
										array(
											"id_plan"	=> "186",
											"valor"		=> "USD 5.000",
										),
										array(
											"id_plan"	=> "188",
											"valor"		=> "USD 15.000",
										),
										array(
											"id_plan"	=> "189",
											"valor"		=> "USD/EUR 30.000",
										),
									),
		));
		
	
	
	foreach($resultado as $nivel) {
		var_dump($nivel['id_beneficio']);
		var_dump($nivel['nombre']);
		foreach($nivel['planes'] as $plan) {
			var_dump($plan);
		}
	}
	
	foreach($resultado as $nivel) {
		printf("Id beneficio:%d <br />",$nivel['id_beneficio']);
		printf("Nombre:%s <br />",$nivel['nombre']);
		$i=1;
		foreach($nivel['planes'] as $plan) {
			print("******* <br />");
			printf("Id plan %d: %d <br />", $i, $plan["id_plan"]);
			printf("Valor %d: %s <br />", $i, $plan["valor"]);
			$i++;
		}
	}
	
	
?>