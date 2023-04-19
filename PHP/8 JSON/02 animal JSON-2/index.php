<?php include 'cachinos/header.php'; ?>

    <h1>Listado de Animales</h1>

    <?php

      //leer contenido de json
      $datosjson= file_get_contents("JSON/datos.json");
  
      //convertir json en array php
      $animales= json_decode($datosjson,true);

      //mostrar contenido de contenedor
      //   var_dump($animales);

    echo '<ul class="tarjetas">';   
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
            echo '<a class="btn" href="ficha.php?animal='.$animal['nombre'].'">+ info</a>';
        echo '</li>';
      }
      echo '</ul>';
       
    
    ?>

<?php include 'cachinos/footer.php'; ?>