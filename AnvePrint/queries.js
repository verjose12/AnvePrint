// queries.js
const db = require('./db'); // Ruta correcta a tu módulo db.js

function insertUser(nombre, correo, contrasena, callback) {
  db.query(
    'INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)',
    [nombre, correo, contrasena],
    callback
  );
}

function authenticateUser(correo, contrasena, callback) {
    db.query(
      'SELECT nombre FROM usuarios WHERE correo = ? AND contrasena = ?',
      [correo, contrasena],
      callback
    );
  }
  
module.exports = {
  insertUser,
  authenticateUser,
  // Agrega más funciones de consulta aquí si es necesario
};
