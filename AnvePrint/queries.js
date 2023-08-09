// queries.js
const db = require('./db'); // Ruta correcta a tu módulo db.js

function insertUser(nombre, correo, contrasena, callback) {
  db.query(
    'INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)',
    [nombre, correo, contrasena],
    callback
  );
}

module.exports = {
  insertUser,
  // Agrega más funciones de consulta aquí si es necesario
};
