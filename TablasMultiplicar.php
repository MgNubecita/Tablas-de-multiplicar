<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Tablas de Multiplicar</title> 
		<link href="tablas.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<meta name="author" content="Nubecita">
	</head>
	<body>
		<header>
			<br>
			<p class='titulo'> Tablas de Multiplicar </p>
		</header>
		<?php
			for ($i1=1; $i1<=10; $i1++){
				echo "<table class='tabla$i1'>";
				for ($i2=0; $i2<11; $i2++){
					$r = $i1 * $i2;
					echo "<tr><td>"." $i1 x $i2 = $r</td></tr>";
				}
				echo "</table>";
			}
		?>
	</body>
</html>