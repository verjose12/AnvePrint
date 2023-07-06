<?php
require 'conex.php';
$id=$_GET['id_usuario'];
$sql= "SELECT * FROM usuarios WHERE id_usuario='$id'";
$resultado = $mysqli->query($sql);
//$row = $resultado->fecth_array_assoc();
$row = mysqli_fetch_assoc($resultado)
 ?>

<!DOCTYPE html>
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
    <h3 style="text-align:center">Modificar Registro</h3>
  </div>

  <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
  				<div class="form-group">
  					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
  					<div class="col-sm-10">
  						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
  					</div>
  				</div>

  				<input type="hidden" id="id" name="id_usuario" value="<?php echo $row['id_usuario']; ?>" />

  <div class="form-group">
    <label for="apellido">Apellido</label>
  <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $row['apellido']; ?>" placeholder="Ingresa Apellido" required>
  </div>

  <div class="form-group">
    <label for="telefono">Telefono</label>
  <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $row['telefono']; ?>"placeholder="Ingresar Telefono" required>
  </div>

  <div class="form-group">
    <label for="direccion">Direccion</label>
  <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $row['direccion']; ?>" placeholder="Ingresa Direccion" required>
  </div>

  <div class="form-group">
    <label for="correo">Correo</label>
  <input type="email" name="correo" id="correo"  class="form-control" value="<?php echo $row['correo']; ?>" placeholder="Ingresar Correo" required>
  </div>

  <div class="form-group">
    <label for="clave">Contraseña</label>
  <input type="password" name="clave" id="clave"  class="form-control" value="<?php echo $row['clave']; ?>" placeholder="Ingresar Contraseña" required>
  </div>

  <div class="form-group">
  <input type="submit" value="Modificar">
  </div>

  </form>
  </body>
</html>
