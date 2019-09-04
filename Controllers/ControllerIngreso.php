<?php

	require_once("../DAO/DAOUsuario.php");
	require_once("../Models/Usuario.php");

	session_start();
	$intentos = false;

	//Validar Existencia de variables POST
	$funcion = isset($_POST['Funcion']) ? $_POST['Funcion'] : null;
	$username = isset($_POST['username']) ? $_POST['username'] : null;
	$password = isset($_POST['password']) ? $_POST['password'] : null;



	if($funcion != "" && $username !="" && $password != ""){
		$parametro = new Usuario(null, $username, $password, null, null);
		$dao = new DAOUsuario();
		$filas = $dao->buscar($parametro);

		if($filas > 0){				
			$_SESSION['validar']  = true;			
		}else{			
			if(!isset($_SESSION['intentos'])){
				$_SESSION['intentos'] = 1;	
			}else{
				$_SESSION['intentos'] = $_SESSION['intentos'] + 1;	
				if($_SESSION['intentos'] == 5){
					$intentos = true;
				}
			}			
		}	

		if($intentos == true){
			echo("Error");
			$_SESSION['intentos'] = 0;
		}else{
			echo($filas);	
		}		
	}

