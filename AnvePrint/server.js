const express = require('express'); //este importa express
//const { path } = require('express/lib/application');
const path = require("path");
const app = express();// funcion express
const port = 3000; // Se Puede cambiar el puerto según lo que se necesite
const mime = require("mime");
const router = express.Router();//Para renderizar el formulario de registro


// Ruta para servir archivos estáticos (como imágenes) desde la carpeta 'public'

app.use(express.static('public'));
// Define las rutas y las lógicas del negocio aquí

app.get('/', (req, res) => { 
  //res.send('Bienvenido a mi e-commerce con temática de anime!');//Responde con texto plano
  //res.sendFile("C:/Users/Cinthya/Documents/GitHub/AnvePrint/AnvePrint/index.html")// Envia la respuesta con el html
  res.sendFile(path.join(__dirname, "/index.html")); //utilizamos el metodo path para requerir la ruta de manera automatica
})
//add mime para los estilos
app.get('/styles/styles.css', (req, res) => {
  const cssPath = path.join(__dirname, 'styles', 'styles.css');
  const contentType = mime.getType(cssPath) || 'text/css';
  res.setHeader('Content-Type', contentType);
  res.sendFile(cssPath);
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

// Inicia el servidor
app.listen(port, () => { // metodo listen 
  console.log(`Servidor escuchando en esta ruta http://localhost:${port}`); // muestra en consola el mensae ¨Servidor escuchado ...¨
});
