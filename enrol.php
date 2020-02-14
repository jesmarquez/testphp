<?php
	$table = 'UAOWEB.V_MOODLE_MATRICULA';
	$coursefield = 'COURSE_SHORTNAME';
	$userfield = 'USERNAME';
	$rolefield = '';
	$otheruserfield = '';
	
	$localrolefield   = 'shortname';
	$localuserfield   = 'username';
	$localcoursefield = 'username';
	$unenrolaction = 0;
	$defaultrole = 5;
	
	$roles = array();
	
	$roles['manager'] = 1;
	$roles['coursecreator'] = 2;
	$roles['editingteacher'] = 3;
	$roles['teacher'] = 4;
	$roles['student'] = 5;
	
	var_dump($roles);
	
	
	

?>