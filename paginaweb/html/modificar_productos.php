<?php
require 'conex.php';
$id=$_GET['id_producto'];
$sql= "SELECT * FROM productos WHERE id_producto='$id'";
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
    <h3 style="text-align:center">Modificar Productos</h3>
  </div>

  <form class="form-horizontal" method="POST" action="update_producto.php" autocomplete="off">
          <div class="form-group">
            <label for="producto" class="col-sm-2 control-label">Producto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="producto" name="producto" value="<?php echo $row['producto']; ?>" required>
            </div>
          </div>

  <input type="hidden" id="id_producto" name="id_producto" value="<?php echo $row['id_producto']; ?>" />

  <div class="form-group">
    <label for="tecnica">Tecnica</label>
  <input type="text" name="tecnica" id="tecnica" class="form-control" value="<?php echo $row['tecnica']; ?>" required>
  </div>

  <div class="form-group">
    <label for="material">material</label>
  <input type="text" name="material" id="material" class="form-control" value="<?php echo $row['material']; ?>"required>
  </div>

  <div class="form-group">
    <label for="precio_unidad">Precio_Unidad</label>
  <input type="text" name="precio_unidad" id="precio_unidad" class="form-control" value="<?php echo $row['precio_unidad']; ?>"required>
  </div>

  <div class="form-group">
    <label for="precio_mayoreo">Precio_Mayoreo</label>
  <input type="precio_mayoreo" name="precio_mayoreo" id="precio_mayoreo"  class="form-control" value="<?php echo $row['precio_mayoreo']; ?>"required>
  </div>


  <div class="form-group">
  <input type="submit" value="Modificar">
  </div>


  </form>
  </body>
</html>
