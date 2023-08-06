const express = require('express'); //este importa expree
const app = express();// funcion express
const port = 3000; // Puedes cambiar el puerto según tus necesidades

// Define las rutas y las lógicas de negocio aquí
app.get('/', (req, res) => {
  res.send('Bienvenido a mi e-commerce con temática de anime!');
});

// Inicia el servidor
app.listen(port, () => { // metodo listen 
  console.log(`Servidor escuchando en http://localhost:${port}`); // muestra en consola el mensae ¨Servidor escuchado ...¨
});
