<!--Este codigo corresponde a la vista del dashboard, el cual se encarga de mostrar el formulario 
para agregar un nuevo contacto y una nueva cita-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <title>Dashboard</title>
</head>
<body>

<!--El codigo php se encarga de verificar si el usuario ha iniciado sesión, 
si no es así, lo redirige a la vista del login-->
   <?php
session_start();

if(!isset($_SESSION['usuario_id'])){
    header("Location: login.html");
}
?>


<!--Formulario para agregar un nuevo contacto y una nueva cita-->
<div class="container">

<!--Titulo del formulario-->
<h2>Agrega el contacto y la cita</h2>

<form action="../php/add_contacto_cita.php" method="POST">

    <!--Sección para agregar un nuevo contacto-->
    <h3>Contacto</h3>
    <!--nombre del contacto-->
    Nombre
    <input type="text" name="nombre" required>
    <!--telefono del contacto-->
    Telefono
    <input type="text" name="telefono">
    <!--email del contacto-->
    Email
    <input type="email" name="email">
    
    <!--Sección para agregar una nueva cita-->
    <h3>Cita</h3>
    <!--fecha de la cita-->
    Fecha
    <input type="date" name="fecha">
    <!--descripcion de la cita-->
    Descripcion
    <input type="text" name="descripcion">
    <!--botón para enviar el formulario-->
    <button type="submit">Guardar contacto y cita</button>
    
    </form>
    
</div>
    
</body>
</html>