<?php

include_once 'datosconexionBD.php';


// Crear una conexion
// En la conexión, indicamos la base de datos que queremos utilizar.
$con = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BBDD);
// Comprobar la conexión
if (!$con) {
 die("Error en la conexión: " . mysqli_connect_error());
}
// preparar y vincular
$stmt = $con->prepare("INSERT INTO usuario (nombre,sexo,3dad ) VALUES (?,?,?)");
$stmt->bind_param("sis", $nombre, $numero,$email);

// establecemos los parámetros y ejecutamos

$nombre = "José";
$edad=40;
$sexo="Varón";
$stmt->execute();


$nombre = "María";
$edad=41;
$sexo="Varona";
$stmt->execute();

$nombre = "Jesús";
$edad=42;
$sexo="Varón";
$stmt->execute();

echo "Las filas se han insertado correctamente";


$stmt->close();

$con->close();

?>