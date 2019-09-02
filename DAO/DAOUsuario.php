<?php

	require_once("DAO.php");
	require_once("../Models/Usuario.php");
	
	class DAOUsuario extends DAO{

		public function queryBuscar(){
			$query = "SELECT * FROM login.usuario WHERE usuario=? AND password=? AND (intentos <3 OR intentos IS NULL)";
			return $query;
		}

		public function metodoBuscar($statement, $parametro){
			$statement->execute([$parametro->getUsername(), $parametro->getPassword()]);
			$filas = $statement->rowCount();
			return $filas;
		}

		

	}