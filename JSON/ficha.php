<?php include 'cachinos/header.php'; ?>

    <div class="ficha">
    <?
      //leer contenido de json
      $datosjson= file_get_contents("animales.json");
  
      //convertir json en array php
      $animales= json_decode($datosjson,true);


      //recorrer el array y mostrar el valor de GET

      //obtener valor de GET
      if(isset($_GET['animal'])){
        $nombre_animal=$_GET['animal'];
        
        }
        else{
            $nombre_animal='Perro';
        }


//Variable para guardar el array con los datos del animal de esta ficha
      $animal_encontrado=null;
// bucle que en el momento que pase por el animal del GET pasa los datos del array del animal a la variable animal_encontrado
      foreach($animales as $animal){
        if($animal['nombre']==$nombre_animal){
            $animal_encontrado=$animal;
            break; //salimos del bucle cuando lo encuentre, si no seguirá
        } // fin del if
      }// fin del foreach



        
        if($animal_encontrado!=null){
            echo '<img src="img/'.$animal_encontrado['img'].'" alt="'.$animal_encontrado['nombre'].'">';
            echo '<h1>'.$animal_encontrado['nombre'].'</h1>';
            echo '<div class="tablilla">';
            echo '<p>Raza: '.$animal_encontrado['raza'].'</p>';
            echo '<p>Comida: '.$animal_encontrado['comida'].'</p>';
            echo '<p>Habitad: '.$animal_encontrado['habitad'].'</p>';
            echo '</div>';
        }
        else{
            echo 'No se han encontrado animales';
        }

   
    
 
    
    ?>
    <a href="adopta.php">Adoptar</a>
<a href="index.php" class="desactivado">Volver a Lista</a>

</div>


<?php include 'cachinos/footer.php'; ?>