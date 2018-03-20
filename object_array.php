<?php
	/// PARAMETERS - NEED TO BE CHANGED IF YOU CALL A DIFFERENT FUNCTION
$user1 = new stdClass();
$user1->username = 'testusername1';
$user1->password = 'testpassword1';
$user1->firstname = 'testfirstname1';
$user1->lastname = 'testlastname1';
$user1->email = 'testemail1@moodle.com';
$user1->auth = 'manual';
$user1->idnumber = 'testidnumber1';
$user1->lang = 'en';
$user1->theme = 'standard';
$user1->timezone = '-12.5';
$user1->mailformat = 0;
$user1->description = 'Hello World!';
$user1->city = 'testcity1';
$user1->country = 'au';
$preferencename1 = 'preference1';
$preferencename2 = 'preference2';
$user1->preferences = array(
    array('type' => $preferencename1, 'value' => 'preferencevalue1'),
    array('type' => $preferencename2, 'value' => 'preferencevalue2'));
$user2 = new stdClass();
$user2->username = 'testusername2';
$user2->password = 'testpassword2';
$user2->firstname = 'testfirstname2';
$user2->lastname = 'testlastname2';
$user2->email = 'testemail2@moodle.com';
$user2->timezone = 'Pacific/Port_Moresby';
$users = array($user1, $user2);
$params = array('users' => $users);
	
var_dump($params);

?>
