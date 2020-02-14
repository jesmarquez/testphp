<?php
	$params = array('token'=>'123','name'=>'jesus');
	$str_query = http_build_query($params);
	$token = $_ENV["TOKEN_SIGA"];
	echo $str_query;
        echo $token;
?>
