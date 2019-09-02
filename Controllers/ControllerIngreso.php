<?php

	require_once("../DAO/DAOUsuario.php");
	require_once("../Models/Usuario.php");

	//Validar Existencia de variables POST
	$funcion = isset($_POST['Funcion']) ? $_POST['Funcion'] : null;
	$username = isset($_POST['username']) ? $_POST['username'] : null;
	$password = isset($_POST['password']) ? $_POST['password'] : null;

	if($funcion != "" && $username !="" && $password != ""){
		$parametro = new Usuario(null, $username, $password, null, null);
		$dao = new DAOUsuario();
		echo($dao->buscar($parametro));
	}else{
		echo(0);
	}

