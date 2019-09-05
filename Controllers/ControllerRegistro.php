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
			if(preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email)){
				validar($email, "email");
			}else{
				echo(1);
			}			
			break;	
		case 3:
			$encriptar = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			$parametro = new Usuario(null, $username, $encriptar, $email);
			agregar($parametro);
			break;	
	}


	function validar($username, $filtro){
		if($username !=""){
			$dao = new DAOUsuario();
			echo($dao->buscarPor($username, $filtro));
		}
	}

	function agregar($parametro){
		$dao = new DAOUsuario();
		echo($dao->agregar($parametro));
	}

	

