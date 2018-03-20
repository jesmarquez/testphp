<?php
	$params = array('token'=>'123','name'=>'jesus');
	$str_query = http_build_query($params);
	echo $str_query;
?>