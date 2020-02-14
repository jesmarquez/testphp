<?php
	
	$i=0;
	
	if (!$i) {
	$instances = array();
	
	$instance1 = array("1"=>"jesus");
	$instance2 = array("2"=>"david");
	
	$instances[0] = $instance1;
	$instances[1] = $instance2;
	
	var_dump($instances);
	
	//una forma
	$user1 = array('username'=>'testusername1', 'password'=>'testpassword1', 'firstname'=>'testfirstname1', 'lastname'=>'lastname1', 'email'=>'testemail1@moodle.com', 'city'=>'testcity1', 'country'=>'co');
	$params = array(
		'users' => $user1
	);
	var_dump ($params);
	
	//otra forma
	$user2 = array();
	$user2[0]['username']='testusername2';
	$user2[0]['password']='testpassword2';
	
	var_dump($user2);
	
	

	$array = array("uno", "dos", "tres");
	reset($array);
	while (list($clave, $valor) = each($array)) {
		echo "Clave: $clave; Valor: $valor<br />\n";
	}

	foreach ($array as $clave => $valor) {
		echo "Clave: $clave; Valor: $valor<br />\n";
	}

	$var = 0;

	// Se evalúa a true ya que $var está vacia
	if (empty($var)) {
		echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
	}

	// Se evalúa como true ya que $var está definida
	if (isset($var)) {
		echo '$var está definida a pesar que está vacía';
	}
	
	$userfield = "USERNAME";
	$sqlfields = array($userfield);
	$rolefield = "";
	$otheruserfield = "";
	
	
	if ($rolefield) {
            $sqlfields[] = $rolefield;
    }
    if ($otheruserfield) {
            $sqlfields[] = $otheruserfield;
    }
	
	var_dump($sqlfields);
	
	$a = array("a" => "apple", "b" => "banana");
	$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");
	$c = $a + $b; // Unión de $a y $b
	echo "Unión de \$a y \$b: \n";
	var_dump($c);
	
	
	
	
	echo 'roles->';
	$roles = array();
	$roles["manager"] = 1;
	$roles["teacher"] = 4;
	
	var_dump($roles);
	
	
	$roleassigns[1][1] = 1;
	$roleassigns[1][3] = 3;
	$roleassigns[1][4] = 4;
	
	//var_dump($roleassigns);
	
	echo 'roleassigns->';
	foreach($roleassigns as $courseid => $roles){
		var_dump($courseid);
		var_dump($roles);
	}
	
	$obj = (object) array('1' => 'foo');
	var_dump($obj);
	var_dump(isset($obj->{'1'})); // muestra 'bool(false)'
	var_dump(key($obj)); // muestra 'int(1)'
	
	  $user = array();
	  $n = 'j';
	  $user = array("username" => "testusername",
	  "password" => "Testusername.1",
	  "firstname" => "Testfirstname",
	  "lastname" => "testlastname",
	  "email" => "testemail" . $n . "@moodle.com",
	  "auth" => "auth",
	  "idnumber" => "testidnumber2",
	  "firstname" => 'testfirstname',
	  "firstname" => 'testfirstname');
	  
	var_dump($user);
	}
	
	echo '<p>hola</p>';
	$gar = array();
	
	$gar = array(""
?>
