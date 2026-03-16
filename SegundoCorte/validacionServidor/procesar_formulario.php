<!--Este archivo valida los datos.-->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    //validacion de datos
    //la funcion empty() se utiliza para verificar si una variable está vacía o no. 
    //En este caso, se verifica si alguna de las variables $nombre, $email o $telefono está vacía. 
    //Si alguna de ellas está vacía, se muestra un mensaje solicitando al usuario que complete todos los campos.
    if (empty($nombre) || empty($email) || empty($telefono)){
        echo "Por favor, complete todos los campos.";
        //la funcion filter_var() se esta utlizando para validar el formato del correo electrónico.
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Formato de correo electrónico no válido.";
    //la funcion preg_match() se utiliza para validar el formato del número de teléfono. En este caso 10.
    }elseif (!preg_match("/^\d{10}$/", $telefono)){
        echo "Numero de teléfono no válido. Debe contener 10 dígitos.";
    }else{
        //Procesar el formulario (almacenamiento en la base de datos, envío de correo, etc.)
        echo "!Registro exitoso¡";
    }
    };