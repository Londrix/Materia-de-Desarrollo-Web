<?php 
session_start(); 
if (!isset($_SESSION["user_id"])) {     header("Location: index.html");     exit(); 
} 
?> 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Dashboard</title> 
</head> 
<body> 
    <h2>Bienvenido, <?php echo $_SESSION["username"]; ?>!</h2> 
    <a href="logout.php">Cerrar sesión</a> 
</body> 
</html> 
