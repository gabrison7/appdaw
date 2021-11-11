<?php

include_once 'conexion.php';
$config = parse_ini_file('datos.ini');
$conexionPDO =  obtenerConexionPDO($config);

// Comprobar la conexión
try {
  //CONSTRUIMOS LA SENTENCIA SQL
  $sql = "INSERT INTO usuario (nombre, sexo, edad) VALUES ('luis', 43, 'luismr@ies.es')";
  // se usa exec() porque la sentencia no devuelve ningún valor
  $conexionPDO->exec($sql);
  echo "<p>Nueva fila creada correctamente";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conexionPDO = null;
