//Este archivo se encarga de establecer la conexión con la base de datos MySQL utilizando mysqli.
<?php 
$conexion = new mysqli("localhost", "root", "", "mi_base"); 
  
if ($conexion->connect_error) { 
    die("Error de conexión: " . $conexion->connect_error); 
} 
echo "Conexión exitosa"; 
?> 