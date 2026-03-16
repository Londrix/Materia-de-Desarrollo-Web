<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Formulario con PHP</title> 
</head> 
<body> 
    <h2>Formulario de saludo</h2> 
    <form action="procesar.php" method="post"> 
        <label for="nombre">Nombre:</label> 
        <input type="text" id="nombre" name="nombre" required> 
        <button type="submit">Enviar</button> 
    </form> 
</body> 
</html>