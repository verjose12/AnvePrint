const mysql = require('mysql2');

const db = mysql.createConnection({
  host: 'localhost',
  user: 'verjose',
  password: 'root',
  database: 'db_anve',
  port: 3306,
});

db.connect((err) => {
  if (err) {
    console.error('Error al conectar a la base de datos:', err.message);
    return;
  }
  console.log('Conexión exitosa a la base de datos');
});

module.exports = db;

