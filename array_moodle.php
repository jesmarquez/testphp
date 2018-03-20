<?php
	include "array_to_xml.php";
	/*
	formato XML-RPC
	$n=1;
	$user1 = array(
		'username' => 'usernametest1'.$n,
		'idnumber' => 'idnumbertest1'.$n,
		'firstname' => 'First Name User Test 1'.$n,
		'lastname' => 'Last Name User Test 1'.$n,
		'city' => 'Perth'.$n,
		'url' => 'http://moodle.org'.$n,
		'country' => 'AU'.$n
		);
	
	$n='2';
	$user2 = array(
		'username' => 'usernametest1'.$n,
		'idnumber' => 'idnumbertest1'.$n,
		'firstname' => 'First Name User Test 1'.$n,
		'lastname' => 'Last Name User Test 1'.$n,
		'email' => 'usertest1@example.com'.$n,
		'city' => 'Perth'.$n,
		'url' => 'http://moodle.org'.$n,
		'country' => 'AU'.$n
		);	
	
	
	
	$userFields = array();
	$userFields['username'] = 'testusername'.$n;
	$userFields['password'] = 'testpassword'.$n;
	$userFields['firstname'] = 'testfirstname'.$n;
	$userFields['lastname'] = 'testlastname'.$n;
	$userFields['email'] = 'testemail'.$n.'@moodle.com';
	$userFields['city'] = 'testcity'.$n;
	$userFields['country'] = 'co';


	var_dump($user1);
	var_dump($user2);
	//var_dump($userFields);
	$lista = array($user1);
	
	var_dump($lista);
	$params = array('users'=>$lista);
	var_dump($params);
	*/

	$user_fields = array();
	$n='1';
	$user_fields[0]['username'] = 'testusername'.$n;
	$user_fields[0]['password'] = 'testpassword'.$n;
	$user_fields[0]['firstname'] = 'testfirstname'.$n;
	$user_fields[0]['lastname'] = 'testlastname'.$n;
	$user_fields[0]['email'] = 'testemail'.$n.'@moodle.com';
	$user_fields[0]['city'] = 'testcity'.$n;
	$user_fields[0]['country'] = 'co';
	$n='2';
	$user_fields[1]['username'] = 'testusername'.$n;
	$user_fields[1]['password'] = 'testpassword'.$n;
	$user_fields[1]['firstname'] = 'testfirstname'.$n;
	$user_fields[1]['lastname'] = 'testlastname'.$n;
	$user_fields[1]['email'] = 'testemail'.$n.'@moodle.com';
	$user_fields[1]['city'] = 'testcity'.$n;
	$user_fields[1]['country'] = 'co';
	
	var_dump($user_fields);
	// print_r($user_fields);
	$username = $user_fields[0]['username'];
	$password = $user_fields[0]['password'];
	
	echo ' '.$username.' '.$password;
	
	$params = array('users'=>$user_fields);
	var_dump($params);
	
	//creating object of SimpleXMLElement
	$xml_user_info = new SimpleXMLElement("<?xml version=\"1.0\"?><users></users>");

	//function call to convert array to xml
	array_to_xml($user_fields,$xml_user_info);

	//saving generated xml file
	$xml_file = $xml_user_info->asXML('users.xml');

	//success and error message based on xml creation
	if($xml_file){
		echo 'XML file have been generated successfully.';
	}else{
		echo 'XML file generation error.';
}
	
?>