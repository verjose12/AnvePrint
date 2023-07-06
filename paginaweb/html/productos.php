<?php
require 'conex.php';
$where="";
$sql="SELECT * FROM productos";
$resultado = $mysqli->query($sql);
 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagen Desing</title>
    <link rel="ico" href="imagenes/ico.gif" type="ico/x-">
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

  </head>
  <body>
    <div class="container">
    <section class="main row">
    <article class="col-md-12 col-sm-12 col-xs-12">
    <div class="cabecera">
    <div class="logo">
    <img src="../imagenes/logo.jpg">
    </div>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="row table-responsive">
  <table border="1"class="table table-striped">
     <caption style="font-size:40px"><b>Productos</b></caption>
    <thead>
      <tr>
        <th>Id_Producto</th>
        <th>Producto</th>
        <th>Tecnica</th>
        <th>Material</th>
        <th>Precio Unidad</th>
        <th>Precio Mayoreo</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
  </thead>
        <tbody>
<?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC))
{?>
<tr>
  <td><?php echo $row['id_producto']; ?></td>
  <td><?php echo $row['producto']; ?></td>
  <td><?php echo $row['tecnica']; ?></td>
  <td><?php echo $row['material']; ?></td>
  <td><?php echo $row['precio_unidad']; ?></td>
  <td><?php echo $row['precio_mayoreo']; ?></td>
  <td><a href="modificar_productos.php?id_producto=<?php echo $row['id_producto']; ?>"><button type="button">
  <img src="../iconos/modificar.jfif" alt="" style="vertical-align:middle;" width="30px" height="20px">
  Editar
</button></a></td>
  <td><a href="eliminar_productos.php?id_producto=<?php echo $row['id_producto']; ?>" >
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
