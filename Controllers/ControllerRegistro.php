<?php

	require_once("../DAO/DAOUsuario.php");
	require_once("../Models/Usuario.php");

	session_start();

	//Validar Existencia de variables POST
	$funcion = isset($_POST['Funcion']) ? $_POST['Funcion'] : null;
	$username = isset($_POST['username']) ? $_POST['username'] : null;
	$password = isset($_POST['password']) ? $_POST['password'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;


	switch ($funcion) {
		case 1:
			validar($username, "usuario");
			break;		
		case 2:
			validar($email, "email");
			break;		
	}




	function validar($username, $filtro){
		if($username !=""){
			$dao = new DAOUsuario();
			echo($dao->buscarPor($username, $filtro));
		}
	}

	

