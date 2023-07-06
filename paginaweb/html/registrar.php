
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Imagen Desing</title>
  <link rel="ico" href="imagenes/ico.gif" type="ico/x-">

  <style>
  body{
  background: #F5A9F2;
}

.sesion{
  width: 400px;
  height: 200px;
  border: 2px;
  border-color: red;
  margin-left: 500px;
  margin-top: 100px;
}

.crear
{
  width: 400px;
  height: 350px;
  color: black;
  background:  #CEE3F6;
  padding: 20px 50px 70px 30px;
  border: 3px solid  #CEE3F6;
  border-radius: 35px;
  text-align: center;
}

  </style>
</head>
<body>

  <div class="crear"> <img src="../iconos/crear.jfif" width="100px" height="50px" alt="">
<form action="crear_usuario.php"  class="" method="post">

    <h2>Crear Usuario</h2>
<div>
  <label >Nombre: </label><input type="text" name="nombre"  class="form-control" placeholder="Ingresar Nombre" required>
</div><br>
<div>
  <label >Apellido: </label><input type="text" name="apellido" class="form-control" placeholder="Ingresa Apellido" required>
</div><br>
<div >
  <label >Telefono: </label><input type="text" name="telefono" class="form-control" placeholder="Ingresar Telefono" required>
</div><br>
<div>
  <label>Direccion: </label><input type="text" name="direccion" class="form-control" placeholder="Ingresa Direccion" required>
</div><br>
<div>
  <label>Correo: </label><input type="text" name="correo" class="form-control" placeholder="Ingresar Correo" required>
</div><br>
<div><label>Contraseña: </label>
<input type="password" name="clave" class="form-control" placeholder="Ingresar Contraseña" required>
</div><br>
<div>
  <br>
<input type="submit" value="Registrar">
<input type="reset" name="" value="Limpiar">
</div>

</form>
  </div>
</body>
</html>
