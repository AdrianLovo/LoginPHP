<!DOCTYPE html>
<html>
<head>
	<title>Template</title>
	<link rel="shortcut icon" href="Resources/img/favicon.ico">

	<link rel="stylesheet" type="text/css" href="../Views/css/style.css">
	<link rel="stylesheet" type="text/css" href="../Views/Resources/alertify/css/alertify.min.css">
	<script type="text/javascript" src="Views/js/jquery-3.3.1.min.js"></script>


</head>
<body>

	<?php
		require_once("Modules/menu.php");
	?>

	<section>
		<?php
			require_once("Controllers/ControllerPagina.php");
			$pagina = new ControllerPagina();
			$pagina->getPagina();
		?>
	</section>

	

	<script type="text/javascript" src="Views/js/ingreso.js"></script>	
    <script type="text/javascript" src="../Views/Resources/alertify/alertify.min.js"></script>

</body>
</html>