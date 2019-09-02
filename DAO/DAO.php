<?php
	
	require_once("Conexion.php");

	abstract class DAO extends Conexion{

		abstract function queryBuscar();						
		/*abstract function queryAgregar();						
		abstract function queryEliminar();						
		abstract function queryModificar();*/						

		abstract function metodoBuscar($statement, $parametro);
		/*abstract function metodoAgregar($statement, $parametro);
		abstract function metodoEliminar($statement, $parametro);				
		abstract function metodoModificar($statement, $parametro1, $parametro2);*/
		
		
		public function buscar($parametro) {
			$pdo = $this->conectar();
			try {
				$statement = $pdo->prepare($this->queryBuscar());
				$filas = $this->metodoBuscar($statement, $parametro);
				$pdo = null;
				return $filas;				
			} catch (Exception $e) {
				echo($e);
			}finally{				
				$pdo = null;
			}
		}	

		/*public function agregar($parametro){
			$pdo = $this->conectar();
			try{
				$pdo->beginTransaction();
				$statement = $pdo->prepare($this->queryAgregar());
				$this->metodoAgregar($statement, $parametro);
				$idGenerado = $pdo->lastInsertId();	

				for($i = 1; $i <=$parametro->getCantidadCuotas(); $i++){
					$statement2 = $pdo->prepare($this->queryAgregarDetalle());
					$this->metodoAgregarDetalle($statement2, $idGenerado, $i);	
				}
				$pdo->commit();
				return $idGenerado;
			}catch(PDOException $e){
				$pdo->rollBack();
				LogError::guardarLog("Sql.log", $e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
			}finally{
				$this->desconectar();
			}
		}

		public function eliminar($parametro) {
			$pdo = $this->conectar();
			try{
				$pdo->beginTransaction();
				$statement = $pdo->prepare($this->queryEliminar());
				$filasAfectadas = $this->metodoEliminar($statement, $parametro);

				$statement2 = $pdo->prepare($this->queryEliminarDetalle());
				$filasAfectadas2 = $this->metodoEliminarDetalle($statement2, $parametro);
				$pdo->commit();
				
				return $filasAfectadas;
			}catch(Exception $e){
				$pdo->rollBack();
				LogError::guardarLog("Sql.log", $e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
			}finally{
				$this->desconectar();
			}
		}

		public function modificar($parametro){
			$pdo = $this->conectar();
			try{
				$statement = $pdo->prepare($this->queryModificar());
				$filasAfectadas = $this->metodoModificar($statement, $parametro);
				return $filasAfectadas;
			}catch(Exception $e){
				LogError::guardarLog("Sql.log", $e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
			}finally{
				$this->desconectar();
			}
		}*/

		
	}
