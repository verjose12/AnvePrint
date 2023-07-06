
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
  width: 300px;
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

  <div class="crear"> <img src="../iconos/usuario.jfif" width="150px" height="100px" alt="">
    <br>
    <br>
<form action="login.php"  class="" method="post">
  <h2>Iniciar Sesion</h2>
  <div class="form-group">
    <label for="">Correo electronico</label>
    <input type="email" name="email" class="form-control"  placeholder="email@example.com">
  </div><br>
  <div class="form-group">
    <label for="">Contraseña</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
<br>
  <button type="submit" name="sesion" class="btn btn-primary">Iniciar Sesion</button>
  <br>
<br>
<a href="registrar.php"> Aun no estas registrado click aqui</a>
</form>
<br>
</div>
