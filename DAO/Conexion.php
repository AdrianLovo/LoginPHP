<?php

	class Conexion{
		
		public function conectar(){
			try{
				$pdo = new PDO("mysql:host=localhost;bdname=login","usuario","");
				return $pdo;
			}catch(PDOException $e){
				echo($e);
				$pdo = null;
			}
		}
		
	}

