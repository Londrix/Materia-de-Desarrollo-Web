<!--Archivo PHP para manejar el proceso de inicio de sesión. -->
<?php
session_start();
include("../config/database.php");

// Recibir los datos del formulario de inicio de sesión
$email = $_POST['email'];
$password = sha1($_POST['password']);

// Verificar las credenciales del usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

// Si se encuentra un usuario con las credenciales proporcionadas, iniciar sesión y dirigir al dashboard.
if($result->num_rows == 1){

    $user = $result->fetch_assoc();
    $_SESSION['usuario_id'] = $user['id'];

    header("Location: ../views/dashboard.php");

}else{

    echo "Credenciales incorrectas";

}

?>