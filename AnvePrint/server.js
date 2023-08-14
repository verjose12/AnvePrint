const express = require('express'); //este importa express
//const { path } = require('express/lib/application');
const path = require("path");
const app = express();// funcion express
const port = 3000; // Se Puede cambiar el puerto según lo que se necesite
const mime = require("mime");
const db = require('./db'); //importa el modulo db.js
const queries = require('./queries'); // conecta a tu módulo queries.js

//BD
app.use(express.urlencoded({ extended: true }));

app.post('/registrar', (req, res) => {
  // Usar la conexión desde el módulo db.js para realizar la inserción
  const { nombre, correo, contrasena } = req.body;

  queries.insertUser(nombre, correo, contrasena, (error, results) => {
    if (error) {
      console.error('Error en la consulta:', error);
      res.status(500).send('Error al registrar el usuario');
    } else {
      res.send('Usuario registrado exitosamente');
    }
  });
});


app.post('/login', (req, res) => {
  const { correo, contrasena } = req.body;

  queries.authenticateUser(correo, contrasena, (error, results) => {
    if (error) {
      console.error('Error en la autenticación:', error);
      res.status(500).send('Error en la autenticación');
    } else if (results.length > 0) {
      const nombreUsuario = results[0].nombre;
      res.redirect(`/index.html?usuario=${nombreUsuario}`);
    } else {
      res.send('Credenciales incorrectas');
    }
  });
});




// Configuración de EJS como motor de plantillas, 
app.set('view engine', 'ejs');

//buscar en automatico las vistas en la carpeta "views":
app.set('views', path.join(__dirname, 'views'));

//Login
app.get('/login', (req, res) => {
  res.render('login');
});
//Registro
app.get('/registro', (req, res) => {
  res.render('registro');
});

//Catalogo1
app.get('/catalogo1', (req, res) => {
  res.render('Catalogo1');
});

app.get('/anveprint', (req, res) => {
  res.render('AnvePrint');
});
// Ruta para servir archivos estáticos (como imágenes) desde la carpeta 'public'

app.use(express.static('public'));
// Configura la carpeta 'carritoverohtml' para servir archivos estáticos
app.use('/AnvePrint/carritoverohtml', express.static(path.join(__dirname, '/carritoverohtml')));

//add mime para los estilos
app.get('/styles/styles.css', (req, res) => {
  const cssPath = path.join(__dirname, 'styles', 'styles.css');
  const contentType = mime.getType(cssPath) || 'text/css';
  res.setHeader('Content-Type', contentType);
  res.sendFile(cssPath);
});

// Define las rutas y las lógicas del negocio aquí

app.get('/', (req, res) => { 
  //res.send('Bienvenido a mi e-commerce con temática de anime!');//Responde con texto plano
  //res.sendFile("C:/Users/Cinthya/Documents/GitHub/AnvePrint/AnvePrint/index.html")// Envia la respuesta con el html
  res.sendFile(path.join(__dirname, "/index.html")); //utilizamos el metodo path para requerir la ruta de manera automatica
})

// Manejador de errores global
app.use((err, req, res, next) => {
  console.error('Error global:', err);
  res.status(500).send('Ocurrió un error en el servidor');
});

//Carrito compras
app.get('/AnvePrint/carritoverohtml/BrainFood.html', (req, res) => {
  // Aquí puedes enviar el contenido HTML del carrito de compras como respuesta
  res.sendFile(__dirname + "/carritoverohtml/catalogo.html");
});

app.use('/AnvePrint/carritoverohtml', express.static(__dirname + '/carritoverohtml/catalogo.html'));



// Inicia el servidor
app.listen(port, () => { // metodo listen 
  console.log(`Servidor escuchando en esta ruta http://localhost:${port}`); // muestra en consola el mensae ¨Servidor escuchado ...¨
});
