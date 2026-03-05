<!--Este archivo se encarga de agregar un nuevo contacto y una nueva cita para ese contacto.-->
<?php

session_start();
include("../config/database.php");

// Obtener el ID del usuario desde la sesión para asociar el contacto y la cita al usuario correcto.
$usuario = $_SESSION['usuario_id'];

// Recibir los datos del formulario para el nuevo contacto y la nueva cita.
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

// Recibir los datos del formulario para la cita.
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];

// Insertar el nuevo contacto en la base de datos y obtener su ID para asociarlo con la cita.
$sql = "INSERT INTO contactos(usuario_id,nombre,telefono,email)
VALUES('$usuario','$nombre','$telefono','$email')";

// Ejecutar la consulta para insertar el nuevo contacto.
$conn->query($sql);
// Obtener el ID del contacto recién creado para asociarlo con la cita.
$contacto_id = $conn->insert_id;

// Insertar la nueva cita en la base de datos asociada al contacto recién creado.
$sql2 = "INSERT INTO citas(contacto_id,fecha,descripcion)
VALUES('$contacto_id','$fecha','$descripcion')";
// Ejecutar la consulta para insertar la nueva cita.
$conn->query($sql2);

// Redirigir al usuario de vuelta a la página de citas después de agregar el nuevo contacto y la nueva cita.
header("Location: ../views/cita.php");
exit();;

?>