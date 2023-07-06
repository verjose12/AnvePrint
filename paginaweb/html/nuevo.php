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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>

			<form action="crear_usuario.php" class="sesion" method="post">


			<div class="form-group">
			  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresar Nombre" required>
			</div>
			</div>

			<div class="form-group">
			<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingresa Apellido" required>
			</div>

			<div class="form-group">
			<input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingresar Telefono" required>
			</div>

			<div class="form-group">
			<input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingresa Direccion" required>
			</div>

			<div class="form-group">
			<input type="email" name="correo" id="correo"  class="form-control" placeholder="Ingresar Correo" required>
			</div>

			<div class="form-group">
			<input type="password" name="clave" id="clave"  class="form-control" placeholder="Ingresar Contraseña" required>
			</div>

			<div class="form-group">
			<input type="submit" value="Registrar">
			</div>

			</form>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
