<!--Este archivo de codigo corresponde a la vista del login, el cual se encarga de mostrar el formulario 
para que el usuario pueda iniciar sesión-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Login</title>
</head>
<body>
    <!--titulo del formulario de login-->
<h2>Iniciar Sesión</h2>

<!--Formulario de login-->
<form action="../php/login.php" method="POST">

<!--Email del usuario-->
Email:
<input type="email" name="email" required><br>

<!--Contraseña del usuario-->
Password:
<input type="password" name="password" required><br>

<!--Botón para enviar el formulario de login-->
<button type="submit">Entrar</button>

<!--Botón para redirigir a la vista del registro en caso de que el usuario no tenga una cuenta-->
<button type="button" onclick="window.location.href='registro.php'">Registrarse</button>

</form>
</body>
</html>