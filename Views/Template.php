<!DOCTYPE html>
<html>
<head>
	<title>Template</title>

	<link rel="stylesheet" type="text/css" href="../Views/css/style.css">
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

</body>
</html>