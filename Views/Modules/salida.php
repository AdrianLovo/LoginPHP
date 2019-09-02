<?php
	session_start();
	if(!$_SESSION["validar"]){		
		header("location:index.php");
	}

	session_destroy();
?>

<h1>Salida</h1>