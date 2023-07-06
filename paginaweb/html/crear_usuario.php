<?php
include('conexion.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];


$insertar="INSERT INTO usuarios (nombre,apellido,telefono,direccion,correo,clave)
VALUES('$nombre','$apellido','$telefono','$direccion','$correo','$clave')";

$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
   echo '<script>
    alert("Error al Registrarse!!!");
    </script>';
echo '<script>window.location="registrar.php";  </script>';

    }else{
       echo '<script>
     alert("Registro Exitoso!!!");
     </script>';
     }
  echo '<script> window.location="sesioniniciada.html"; </script>';

mysqli_close($conexion);


 ?>
