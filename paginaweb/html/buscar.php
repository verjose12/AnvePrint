<?php
	require 'conex.php';

	$where = "";

	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM usuarios $where";
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
				<h2 style="text-align:center">Curso de PHP y MySQL</h2>
			</div>

			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>

				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>

			<br>

      <div class="row table-responsive">
        <table border="1" class="table table-striped" style="border: solid 2px text-align:center">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Correo</th>
              <th>Contraseña</th>
              <th>Modificar</th>
              <th>Eliminar</th>
        </thead>
              <tbody>
      <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)){?>
      <tr>
        <td><?php echo $row['id_usuario']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
        <td><?php echo $row['direccion']; ?></td>
        <td><?php echo $row['correo']; ?></td>
        <td><?php echo $row['clave']; ?></td>
        <td><a href="modificar.php?id_usuario=<?php echo $row['id_usuario']; ?>"><button type="button">
        <img src="../iconos/actualizar.jpg" alt="" style="vertical-align:middle;" width="30px" height="20px">
        Actualizar
      </button></a></td>
        <td><a href="eliminar.php?id_usuario=<?php echo $row['id_usuario']; ?>" data-toggle="modal" data-target="#confirm-delete">
        <button type="button">
        <img src="../iconos/eliminar.jpg" alt="" style="vertical-align:middle;" width="30px" height="20px">
        Eliminar
        </button></a></td>
      							</tr>
      						<?php } ?>
      					</tbody>
      				</table>
      			</div>

      	</body>
      </html>
