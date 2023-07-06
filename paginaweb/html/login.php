<?php
session_start();
?>

<?php
$conexion=mysqli_connect(
'localhost',
'root',
'',
'paginaweb'
);

if(isset($_POST{'sesion'})){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM usuarios WHERE correo='$email' and clave='$password'";
  $resultado = mysqli_query($conexion,$sql);
if(mysqli_num_rows($resultado )>0){
  $row =mysqli_fetch_array($resultado);
echo $row ['clave'];
  $password = $row ['clave'];
  if($password)
  {
  echo '<script> window.location="sesioniniciada.html"; </script>';
  }
  }
  else
  {
    echo "<script>
    alert('usuario o contraseña incorrecto! vuelve a intentar');
    </script>";
  }
  echo '<script> window.location="sesion.php"; </script>';
  mysqli_close($conexion);
  }
?>
