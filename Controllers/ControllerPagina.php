<?php
	session_start();	

	class ControllerPagina{

		//Obtener archivo base Template
		public function getPlantilla(){
			require_once("Views/Template.php");
		}

		public function getMenu(){
			if(isset($_GET["action"])){
				if($_GET["action"] == "salida"){
					require_once("Views/Modules/menu.php");
				}else{
					if(isset($_SESSION['validar']) == true){
						require_once("Views/Modules/menuIngresado.php");
					}else{
						require_once("Views/Modules/menu.php");
					}
				}							
			}else{
				require_once("Views/Modules/menu.php");
			}
		}



		//Interacion de menu
		public function getPagina(){
			
			if(isset($_GET["action"])){
				if($_GET["action"] == "ingreso" || $_GET["action"] == "informacion" || $_GET["action"] == "registro" || $_GET["action"] == "salida" || $_GET["action"] == "intentos"){
					if($_GET["action"] == "salida"){
						session_destroy();
						include_once("Views/Modules/ingreso.php");		
					}else{
						include_once("Views/modules/". $_GET["action"] .".php");	
					}					
				}else{
					include_once("Views/Modules/ingreso.php");	
				}
			}else{
				include_once("Views/Modules/ingreso.php");
			}
		}

	}
