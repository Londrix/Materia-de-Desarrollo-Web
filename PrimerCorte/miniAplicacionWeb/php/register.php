<!--El codigo PHP para registrar un nuevo usuario en la base de datos-->
<?php
//Archivo PHP para registrar un nuevo usuario en la base de datos
include("../config/database.php");

//Obtenemos los datos del formulario de registro
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

//Insertamos el nuevo usuario en la tabla "usuarios"
$sql = "INSERT INTO usuarios(nombre,email,password)
VALUES ('$nombre','$email','$password')";

//Aqui verificamos si la inserción fue exitosa
if($conn->query($sql)){
    header("Location: ../views/login.php");
    exit();
}else{
    echo "Error";
}
?>