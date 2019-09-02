<?php
	session_start();
	if(!$_SESSION["validar"]){		
		header("location:index.php");
	}
?>

<h1>Bienvenido</h1>