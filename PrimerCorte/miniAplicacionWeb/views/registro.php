<!--En este codigo se encuentra la vista del registro, el cual se encarga de mostrar el formulario 
para que el usuario pueda registrarse en el sistema-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registro.css">
    <title>Registro</title>
</head>
<body>
    
<!--titulo del formulario de registro-->
<h2>Registro de Usuario</h2>

<!--Formulario de registro, el cual se encarga de enviar los datos del usuario a la vista del login para que pueda iniciar sesión-->
<form action="../php/register.php" method="POST">
<!--Nombre del usuario-->
Nombre:
<input type="text" name="nombre" required><br>

<!--Email del usuario-->
Email:
<input type="email" name="email" required><br>

<!--Contraseña del usuario-->
Password:
<input type="password" name="password" required><br>

<!--Botón para enviar el formulario de registro-->
<button type="submit">Registrarse</button>

<!--Botón para redirigir a la vista del login en caso de que el usuario ya tenga una cuenta-->
<button type="button" onclick="window.location.href='login.php'">Ya tengo una cuenta</button>

</form>
</body>
</html>