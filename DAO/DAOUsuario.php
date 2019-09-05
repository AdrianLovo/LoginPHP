<?php

	require_once("DAO.php");
	require_once("../Models/Usuario.php");
	
	class DAOUsuario extends DAO{

		public function queryBuscar(){
			$query = "SELECT * FROM login.usuario WHERE usuario=? AND password=?";
			return $query;
		}

		public function metodoBuscar($statement, $parametro){
			$statement->execute([$parametro->getUsername(), $parametro->getPassword()]);
			$filas = $statement->rowCount();
			return $filas;
		}

		public function queryBuscarPor($filtro){
			$query = "SELECT * FROM login.usuario WHERE ".$filtro."=?";
			return $query;
		}

		public function metodoBuscarPor($statement, $parametro){
			$statement->execute([$parametro]);
			$filas = $statement->rowCount();
			return $filas;
		}

		public function queryAgregar(){
			$query = "INSERT INTO login.usuario(usuario, password, email) VALUES(?, ?, ?)";
			return $query;
		}

		public function metodoAgregar($statement, $parametro){
			$statement->execute([$parametro->getUsername(), $parametro->getPassword(), $parametro->getEmail()]);
		}

		
		

	}