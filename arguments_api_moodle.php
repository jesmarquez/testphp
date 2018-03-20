<?php
echo '**************************<br>';
echo 'ARGUMENTOS API MOODLE<br>';
echo 'ARRAYS - URL CODIFICADA<br>';
echo '**************************<br>';

echo '**************************<br>';
echo 'get_user<br>';
echo '**************************<br>';

$data = array('field'=>'username', 'values'=> array('0'=>'citws'));

var_dump($data);
$query = http_build_query($data);
echo $query;
echo '<br>***********************<br>';

echo '***************************<br>';
echo 'core_course_get_courses_by_field<br>';
echo '***************************<br>';
$parameters = array('field'=>'shortname', 'value'=>'312273-B-IP-20173');
$query = http_build_query($parameters);
echo $query;

echo '<br>***********************<br>';
echo 'core_user_create_users<br>';
echo '***************************<br>';

$user1 = array('username' => 'estudiante1',
				'password' => 'Cit.2018',
				'firstname'=>'nombre1',
				'lastname' => 'apellido1',
				'email' => 'nombre1@uao.edu.co');

$user2 = array('username' => 'estudiante2',
				'password' => 'Cit.2018',
				'firstname'=>'nombre2',
				'lastname' => 'apellido2',
				'email' => 'nombre2@uao.edu.co');
				
$list_users = array(1 => $user1, 2 => $user2);
$parameters = array('users'=>$list_users);
$query = http_build_query($parameters);
var_dump($parameters);
echo '<br>';

echo $query;

?>