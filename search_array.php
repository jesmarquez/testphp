<?php
	$usuario = array("username"=>"",
	"password"=>"",
	"nombre"=>"",
	"apellido"=>"",
	"email"=>"",
	"auth"=>""
	);
	
	/*
	if (array_key_exists('username', $usuario)) printf("The 'username' element is in the array \n");
	if (array_key_exists('password', $usuario)) printf("The 'username' element is in the array \n");
	if (array_key_exists('nombre', $usuario)) printf("The 'username' element is in the array \n");
	if (array_key_exists('apellido', $usuario)) printf("The 'username' element is in the array \n");
	if (array_key_exists('email', $usuario)) printf("The 'username' element is in the array \n");
	if (array_key_exists('auth', $usuario)) printf("The 'username' element is in the array \n"); */
	
	if (array_key_exists('username', $usuario) && array_key_exists('password', $usuario) && array_key_exists('nombre', $usuario) && array_key_exists('apellido', $usuario) && array_key_exists('email', $usuario) && array_key_exists('auth', $usuario))
		printf("Parámetros completos!");
	else
		 printf("Falta un parámetro requisito");
?>