<?php

session_start();
if(!isset($_SESSION['username'])){
    header('Location: no-puedes-pasar.php');
    exit();
}





?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zona privada</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="apple-mobile-web-app-title" content="Richard">
    <meta name="mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-capable" content="yes" />


    
</head>
<body>

    <header></header>

    <main>
        <h1>Bienvenido al área Super secreta</h1>
        <p>Información privilegiada</p>
        <a href="apertura.php">Abrir sesión</a>
        <a href="privado.php">Area privada</a>
        <a href="cierre.php">Cerrar sesión</a>
        <img src="img/espias.jpg" alt="mortadelo y filemon">
    </main>

    <footer>
        <p>&copy; Copyrigth 2023 Sesiones.</p>
    </footer>

</body>
</html>