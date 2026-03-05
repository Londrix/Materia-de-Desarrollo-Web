<!-- Archivo de configuración para la conexión a la base de datos MySQL. -->
<?php
// Configuración de la conexión a la base de datos.
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "citas";
$port = 3307;

// Crear una nueva conexión a la base de datos utilizando los parámetros definidos.
$conn = new mysqli($host, $user, $pass, $dbname, $port);

// Verificar si la conexión fue exitosa, si no, mostrar un mensaje de error y detiene la ejecución del script.
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>