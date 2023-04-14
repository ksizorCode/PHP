<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Adopta tu animal favorito</h1>

    <?php

      //leer contenido de json
      $datosjson= file_get_contents("animales.json");
  
      //convertir json en array php
      $animales= json_decode($datosjson,true);

      //mostrar contenido de contenedor
      //   var_dump($animales);

    echo '<ul class="tarjeta">';   
      //recorrer el array y mostrar datos
      foreach($animales as $animal){
        echo '<li>';
        echo '<img src="img/'.$animal['img'].'" alt="'.$animal['nombre'].'">';
        echo '<h2>'.$animal['nombre'].'</h2>';
        echo '<ul>';
            echo '<li>'.$animal['raza'].'</li>';
            echo '<li>'.$animal['comida'].'</li>';
            echo '<li>'.$animal['habitad'].'</li>';
            echo '<a href="adopta.php">Adopta un "'.$animal['nombre'].'</a>';
        echo '</ul>';
        echo '</li>';
      }
      echo '</ul>';
      








    
    
    ?>
</body>
</html>