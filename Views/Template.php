<!DOCTYPE html>
<html>
<head>
	<title>Template</title>

	<link rel="stylesheet" type="text/css" href="../Views/css/style.css">

</head>
<body>

	<header>
		<h1>Logotipo</h1>
	</header>

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


</body>
</html>