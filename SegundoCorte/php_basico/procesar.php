<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nombre = htmlspecialchars($_POST["nombre"]); 
    echo "¡Hola, " . $nombre . "! Bienvenido a PHP."; 
} 
?> 