<?php include 'fragmentos/funciones.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $titulo?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<!-- abrimos body -->
<body>

<!-- header body -->
<header>
<p><?echo $titulo?></p>
<nav>
   <!-- cojemos los elemnentos de menu.php y los mostramos aquí --> 
<? include 'fragmentos/menu.php'?>
</nav>
</header>

<!-- abrimos main (que luego cerraremos en el archivo footer.php) -->
<main>