<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
$hashed_password = password_hash("123456", PASSWORD_BCRYPT); echo $hashed_password; 
?> 

</body>
</html>