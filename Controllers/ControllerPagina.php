<?php

	class ControllerPagina{

		//Obtener archivo base Template
		public function getPlantilla(){
			require_once("Views/Template.php");
		}

		//Interacion de menu
		public function getPagina(){
			
			if(isset($_GET["action"])){
				if($_GET["action"] == "ingreso" || $_GET["action"] == "informacion" || $_GET["action"] == "registro" || $_GET["action"] == "salida"){
					include_once("Views/modules/". $_GET["action"] .".php");
				}else{
					include_once("Views/modules/ingreso.php");	
				}
			}else{
				include_once("Views/modules/ingreso.php");
			}

		}


	}
