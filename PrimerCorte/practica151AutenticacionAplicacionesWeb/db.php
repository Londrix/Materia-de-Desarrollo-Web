<?php 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "auth_db"; 
$port = 3307;  
  
$conn = new mysqli($host, $username, $password, $dbname, $port); 
if ($conn->connect_error) { 
    die("Conexión fallida: " . $conn->connect_error); 
} 
?> 