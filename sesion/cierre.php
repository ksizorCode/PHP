<?php

session_start();
session_destroy();
unset($_SESSION['username']);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="apple-mobile-web-app-title" content="Richard">
    <meta name="mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-capable" content="yes" />

    
</head>
<body>

    <header></header>

    <main>
        <h1>Sesión cerrada</h1>
        <p>Para poder volver a la zona privada ,se necesita abrir sesión</p>
        <a href="apertura.php">Abrir sesión</a>
        <a href="privado.php">Area privada</a>
        <a href="cierre.php">Cerrar sesión</a>
        <img src="img/cierre.jpg" alt="">

    </main>

    <footer>
        <p>&copy; Copyrigth 2023 Sesiones.</p>
    </footer>

</body>
</html>