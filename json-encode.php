<?php
	$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
	$n = '1';
	$user = array();
	$user['username'] = 'testusername'.$n;
	$user['password'] = 'testpassword'.$n;
	$user['firstname'] = 'testfirstname'.$n;
	$user['lastname'] = 'testlastname'.$n;
	$user['email'] = 'testemail'.$n.'@moodle.com';
	$user['city'] = 'testcity'.$n;
	$user['country'] = 'co';

	echo json_encode($arr);
	
	var_dump($user);
	
	$curl_post_data = array('users'=>$user);
	$params =  json_encode($curl_post_data);
	var_dump($params);
?>