<?php
$usuario="root";
$contra="";
$servidor="localhost";
$BaseD="paginaweb";

$conexion=mysqli_connect($servidor,$usuario,"") or die ("No se conecto al servidor");
$db=mysqli_select_db($conexion,$BaseD) or die ("La Base de datos no existe");
 ?>
