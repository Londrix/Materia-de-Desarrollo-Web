<?php
$portdb = 3307;
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_db", $portdb);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar y limpiar datos
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validación básica
    if (empty($nombre) || empty($email) || empty($password)) {
        die("Todos los campos son obligatorios.");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Correo no válido.");
    }

    // Encriptar la contraseña
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombre, $email, $password_hash);

    if ($stmt->execute()) {
        echo "Registro exitoso. <a href='registro.html'>Volver</a>";
    } else {
        echo "Error en el registro: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>