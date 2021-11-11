
<?php

define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("CLAVE", "");
define("BBDD", "luisBD");

// Crear una conexion
// En la conexión, indicamos la base de datos que queremos utilizar.
$con = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BBDD);
// Comprobar la conexión
if (!$con) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// preparar y vincular
$stmt = $con->prepare("INSERT INTO Pacientes (nombre, direccion ) VALUES (?, ?)");
$stmt->bind_param("ss", $nombre, $direccion);
// establecemos los parámetros y ejecutamos

$nombre = "José";
$sexo = "Varón";
$edad = 11;
$stmt->execute();

$nombre = "José";
$sexo = "Josito";
$edad = 11;
$stmt->execute();

$nombre = "Josué";
$sexo = "Varón";
$edad = 11;
$stmt->execute();

echo "Las filas se han insertado correctamente";

$stmt->close();
$con->close();
?>


