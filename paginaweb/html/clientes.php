<?php
require 'conex.php';
$where="";
$sql="SELECT * FROM usuarios";
$resultado = $mysqli->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

    body
    {
      background:#F5A9A9;
    }

    table{
    background: #CEE3F6;
    border: solid 2px #CEE3F6;
    border-radius: 25px;
    font-size: 12px;
    border-spacing: 10px 20px;
    border-collapse: separate;
    text-align:center;
    margin: 0 auto;
    }

    td
    {
      background: #CEE3F6;
    }
    .logo>img{
      width:15%;
      height:150px;
      float: left;
    }

    </style>
    <h1 align="center">Datos del Cliente</h1>
    <br>

  </head>
  <body style="background: #F5A9A9">

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
        <th>Editar</th>
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
  <img src="../iconos/modificar.jfif" alt="" style="vertical-align:middle;" width="30px" height="20px">
  Editar
</button></a></td>
  <td><a href="eliminar.php?id_usuario=<?php echo $row['id_usuario']; ?>" 
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
