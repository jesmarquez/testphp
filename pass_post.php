<?php
	$post['lname'] = 'Last name';
	$post['fname'] = 'First Name';
	$post['mail'] = 'example@mail.com';
	
	var_dump($post);
	
	$url = 'http://example.com/get-the-post-data.php';
	$fields = array ('lname' =>urlencode($post['lname']), 'fname' => urlencode($post['fname']), 'mail' => urlencode($post['mail'])); //, 'mail' = urlencode($post['mail']));
	//var_dump($fields);
	
	$fields_string='';
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');
	print($fields_string);
	
	print('<br>');
	print('<br>');
	print('<br>');
	
	$n='1';
	$userFields = array();
	$userFields['username'] = 'testusername'.$n;
	$userFields['password'] = 'testpassword'.$n;
	$userFields['firstname'] = 'testfirstname'.$n;
	$userFields['lastname'] = 'testlastname'.$n;
	$userFields['email'] = 'testemail'.$n.'@moodle.com';
	$userFields['city'] = 'testcity'.$n;
	$userFields['country'] = 'co';
	
	$curl_post_data = array('wstoken'=>'b90fbf8066a4752a17619e8b9d79c9ca','wsfunction'=>'core_enrol_get_enrolled_users', 'moodlewsrestformat'=>'xml', 'users'=>$userFields);
	
	$field_string = http_build_query($curl_post_data);
	var_dump($curl_post_data);
	var_dump($field_string);



	$params = array('users'=>array($userFields));
	$xml_params = xmlrpc_encode($params);
	echo($xml_params);
	
	
	/*
	$data = array('foo'=>'bar',
              'baz'=>'boom',
              'cow'=>'milk',
              'php'=>'hypertext processor');

	echo http_build_query($data) . "\n";
	echo http_build_query($data, '', '&amp;');
	*/
	
	print('<br>');
	echo('pass id idnumber email');
	
	
	$id[0] = 'citws';
	// $values = array('values' => array('citws', 'jesmqz'));
	$values = array('field' => 'email', 'values' => 'citws');
	var_dump($values);
	$field_string = http_build_query($values);
	print('<br>');
	echo($field_string);
	
	
    $values = array('values' => array('citws'));
	$field_string = http_build_query($values);
	print('<br>');
	echo($field_string);

	print('<br>');
	
	$params = array('field'=>'username', 'values' => array('citws'));
	var_dump($params);
	$string_url = http_build_query($params);
	echo($string_url);
	
	print('<br>');
	
	$params = array('options' => array('ids' => array(3)));
	var_dump($params);
	$string_url = http_build_query($params);
	echo($string_url);
	
	print('<br>');
	echo '************';
	print('<br>');
	echo 'enrollments';
	print('<br>');
	echo '************';
	print('<br>');

	$valor=100;
	$datos_matricula1 = array('roleid'=>$valor,'userid'=>$valor,'courseid'=>$valor,'timestart'=>$valor,'timeend'=>$valor, 'suspend'=>$valor);
	$valor=200;
	$datos_matricula2 = array('roleid'=>$valor,'userid'=>$valor,'courseid'=>$valor,'timestart'=>$valor,'timeend'=>$valor, 'suspend'=>$valor);
	$params = array('enrolments'=> array(0=>$datos_matricula1,1=>$datos_matricula2));
	
	var_dump($params);
	
?>