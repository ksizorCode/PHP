<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Leer Json</h1>

    <?php

      //leer contenido de json
      $datosjson= file_get_contents("animales.json");
  
      //convertir json en array php
      $animales= json_decode($datosjson,true);

      //mostrar contenido de contenedor
      //   var_dump($animales);

    echo '<ul>';   
      //recorrer el array y mostrar datos
      foreach($animales as $animal){
        echo '<li>';
        echo '<img src="img/'.$animal['img'].'" alt="'.$animal['nombre'].'">';
        echo '<h2>'.$animal['nombre'].'</h2>';
        echo '<ul>';
            echo '<li>'.$animal['raza'].'</li>';
            echo '<li>'.$animal['comida'].'</li>';
            echo '<li>'.$animal['habitad'].'</li>';
        echo '</ul>';
        echo '</li>';
      }
      echo '</ul>';






    
    
    ?>
</body>
</html>