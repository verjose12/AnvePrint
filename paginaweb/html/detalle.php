<?php
include('conexion.php');

$id_producto=$_POST['id_producto'];
$medida=$_POST['medida'];
$color=$_POST['color'];
$cantidad=$_POST['cantidad'];



$insertar="INSERT INTO orden (id_producto,medida,color,cantidad)
VALUES('$id_producto','$medida','$color','$cantidad')";

$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
   echo '<script>
    alert("Error al Registrarse!!!");
    </script>';
echo '<script>window.location="playeras3.html";  </script>';

    }else{
       echo '<script>
     alert("Registro Exitoso!!!");
     </script>';
     }
  echo '<script> window.location="sesioniniciada.html"; </script>';

mysqli_close($conexion);


 ?>
