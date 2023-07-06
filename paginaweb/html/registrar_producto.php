<?php

	require 'conex.php';

	$id_producto= $_POST['id_producto'];
	$medida= $_POST['medida'];
	$color= $_POST['color'];
	$cantidad=$_POST['cantidad'];

	$sql = "INSERT INTO orden (id_producto,medida,color,cantidad) VALUES ('$id_producto', '$medida', '$color', '$cantidad')";
	$resultado = $mysqli->query($sql);

?>

<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>

					<a href="playeras3.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
