<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Desing</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" href="../imagenes/dc.png" type="image/x-icon">
  <style>
  .container{
    background: #A9BCF5;
    width:100%;
    height:1500px;
  }
  .cabecera{
     width:100%;
     height:150px;
     background:#FA58F4;
   }
   .logo>img{
     width:15%;
     height:149px;
     float: left;
   }
   .titulo{
     width:30%;
     height: 100px;
     text-align:center;
     margin-top:20px;
     float: left;
     margin-left:20%;
     font-size: 60px;
   }
   .nav{
     width:100%;
     height:35px;
     background: #A4A4A4;
   }
   ul, ol{
   list-style: none;
   }
   .nav li a {
   background-color: #A4A4A4;
   color: #000000;
   text-decoration: none;
   padding: 5px 5px;
   display: block;
   margin-left: 130px;
   }
   .nav li a:hover{
   background-color: #F5A9A9;
   transition: all .5s;
  }
  .nav > li {
   float: left;
  }
  .nav li ul{
   display: none ;
   position: absolute;
   min-width: 140px;
 }
 .seri{
   width: 55%;
   height: 600px;
   float:left;
   padding: 20px;
   margin-top: 20px;
 }
 .seri>img{
   width: 80%;
   height: 60%;
   margin-left:10%;
 }
 .datos{
   width: 37%;
   height: 500px;
   float:left;
   padding: 20px;
   margin-top: 20px;
 }
 .subli{
   width: 60%;
   height: 500px;
   float:right;
   padding: 20px;
   margin-top: 20px;
   margin-left: 1%;
 }
 .subli>img{
   width: 80%;
   height: 80%;
   margin-left:10%;
 }
 .datos2{
   width: 39%;
   height: 500px;
   float:left;
   padding: 20px;
   margin-top: 20px;
 }
 .cara{
   width: 40%;
   float:left;
   margin-left: 12%;
 }
 .tex{
   width: 40%;
   margin-left: 250px;
 }
  </style>
</head>
<body>
<div class="container">
     <section class="main row">
     <article class="col-md-12 col-sm-12 col-xs-12">
     <div class="cabecera">
     <div class="logo">
     <img src="../imagenes/icono.jpg">
     </div>
     <div class="titulo"><p>Playeras</p></div>
     </div>
     </article>

     <article class="col-md-12 col-sm-12 col-xs-12">
     <ul class="nav">
     <li><a href="sudaderas2.html">Sudaderas</a></li>
     <li><a href="termos2.html">Termos</a></li>
     <li><a href="tazas2.html">Tazas</a></li>
     <li><a href="invitaciones2.html">Invitaciones</a></li>
     <li><a href="#">Cerrar sesi&oacute;n</a></li>
     </ul>
     </article>

     <article class="col-md-12 col-sm-12 col-xs-12">
      <div class="seri">
      <img src="../imagenes/playeras/player3.jpg" alt=""><br><br>
      <div class="cara">
      <h5>Caracteristicas:</h5>
      <p>Marca:</p>
      <h5>Image Desing</h5>
      <p>Diseño de la Tela:</p>
      <h5>Imagen Personalizada</h5>
      </div>
      <div class="tex">
      <p>Modelo:
      <h5>Manga corta</h5>
      </p>
      </div>
      </div>

      <div class="datos">
      <h3>Vinil Textil: Playera personalizada</h3>
      <p style="font-size:30px;">100% Algodon</p>
      <h1 style="color:red;">$150</h1>
      <form action="registrar_producto.php" class="sesion" method="post">


      <label>Codido:</label>
      <select name="id_producto" type="text">
      <option value="">1</option>
      </select>
      <br>

      <label>Talla:</label>
      <select name="medida" type="text">
      <option value=""></option>
      <option value="S">S</option>
      <option value="M">M</option>
      <option value="L">L</option>
      <option value="XL">XL</option>
      </select>
      <br>

      <label>Color:</label>
      <select name="color" type="text">
      <option value=""></option>
      <option value="Blanco">Blanco</option>
      <option value="Negro">Negro</option>
      <option value="Vino">Vino</option>
      </select>
      <br>
      <label>Cantidad:</label><input type="text" name="cantidad">
      <br>
      <label>Diseño:</label><input type="file">
      <br>
      <br>
      <input type="submit" value="Ordenar">
      </form>
      </div>
      </article>




    <hr style="border:1px solid; width:80%;">
     <article class="col-md-12 col-sm-12 col-xs-12">
     <div class="subli">
     <img src="../imagenes/playeras/player1.jpg" alt="">
     </div>
     <div class="datos2">
     <h3>Sublimar: Playera personalizada</h3>
     <p style="font-size:30px;">100% Polyester</p>
     <h1 style="color:red;">$120</h1>
     <form action="detalle.php" class="" method="post">
     <label>Talla:</label>
     <select name="talla" type="text">
     <option value=""></option>
     <option value="S">S</option>
     <option value="M">M</option>
     <option value="L">L</option>
     <option value="XL">XL</option>
     </select>
     <br>

     <label>Color:</label>
     <select name="color" type="text">
     <option value=""></option>
     <option value="Blanco">Blanco</option>
     <option value="Negro">Negro</option>
     <option value="Vino">Vino</option>
     </select>
     <br>
     <label>Cantidad:</label><input type="number">
     <br>
     <label>Fecha:</label>
     <input type="date" name="fecha" value="">
     <label>Diseño:</label><input type="file">
     <br><br>
     <input type="submit" value="Ordenar">
     <input type="submit" value="Agregar al carrito">
     </form>
     </div>
     </article>
     </section>
     </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
