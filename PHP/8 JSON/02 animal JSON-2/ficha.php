<?php include 'cachinos/header.php'; ?>

    <div class="ficha">
    <?

    //recorrer el array y mostrar el valor de GET

      //obtener valor de GET
      if(isset($_GET['animal'])){
        $nombre_animal=$_GET['animal'];
        
        }
        else{
            $nombre_animal='Perro';
        }




      //leer contenido de json
      $datosjson= file_get_contents("JSON/datos.json");
  
      //convertir json en array php
      $animales= json_decode($datosjson,true);


  





// // Comprobamos si ya hay productos seleccionados como favoritos
// if(isset($_COOKIE["favoritos"])) {
//     $favoritos = unserialize($_COOKIE["favoritos"]);
// } else {
//     $favoritos = array();
// }

// Si se presiona un botón "Añadir a favoritos" o "Quitar de favoritos"
if(isset($_POST["accion"]) && isset($_POST["producto"])) {
    $accion = $_POST["accion"];
    $producto = $_POST["producto"];

    // Si se ha presionado el botón "Añadir a favoritos"
    if($accion == "anadir") {
          // Comprobamos si el producto ya está en la lista de favoritos
          if(!in_array($producto, $favoritos)) {
        // Añadimos el producto a la lista de favoritos
        $favoritos[] = $producto;

        // Guardamos la lista de favoritos en una cookie
        setcookie("favoritos", serialize($favoritos), time() + 3600);
        }
    }

    // Si se ha presionado el botón "Quitar de favoritos"
    if($accion == "quitar") {
        // Buscamos el índice del producto en la lista de favoritos
        $indice = array_search($producto, $favoritos);

        // Si encontramos el producto en la lista de favoritos, lo eliminamos
        if($indice !== false) {
            array_splice($favoritos, $indice, 1);

            // Guardamos la lista de favoritos en una cookie
            setcookie("favoritos", serialize($favoritos), time() + 3600);
        }
    }
}



//Variable para guardar el array con los datos del animal de esta ficha
$animal_encontrado=null;
$actual=0;
// bucle que en el momento que pase por el animal del GET pasa los datos del array del animal a la variable animal_encontrado
      foreach($animales as $animal){
         
        if($animal['nombre']==$nombre_animal){
            $animal_encontrado=$animal;
            break; //salimos del bucle cuando lo encuentre, si no seguirá
        } // fin del if
        $actual++; //averiguamos cual es la posición del elemento actual en el array (para calcular siguiente y anterior ás adelante)
      }// fin del foreach






        
        if($animal_encontrado!=null){
            echo '<img src="img/'.$animal_encontrado['img'].'" alt="'.$animal_encontrado['nombre'].'">';
            echo '<h1>'.$animal_encontrado['nombre'].'</h1>';
            echo '<div class="tablilla">';
            echo '<p>Raza: '.$animal_encontrado['raza'].'</p>';
            echo '<p>Alimentación: '.$animal_encontrado['comida'].'</p>';
            echo '<p>Habitad: '.$animal_encontrado['habitad'].'</p>';
            echo '</div>';?>
            <?php if(in_array($animal_encontrado["nombre"], $favoritos)): ?>
                <form method="post">
                    <input type="hidden" name="accion" value="quitar">
                    <input type="hidden" name="producto" value="<?php echo $animal_encontrado["nombre"]; ?>">
                    <button type="submit"><i class="fa-regular fa-circle-xmark"></i> Quitar de favoritos</button>
                </form>
            <?php else: ?>
                <form method="post">
                    <input type="hidden" name="accion" value="anadir">
                    <input type="hidden" name="producto" value="<?php echo $animal_encontrado["nombre"]; ?>">
                    <button type="submit"><i class="fa-solid fa-circle-plus"></i> Añadir a favoritos</button>
                </form>
            <?php endif;
           
        }
        else{
            echo 'No se han encontrado animales';
        }

   
    
 
    
    ?>


<?
//cáculo de siguiente y anterior
$siguiente = $actual+1;
$anterior= $actual-1;

//Si siguiente llega al fin
if($siguiente>count($animales)-1){ $siguiente=0;}

//Si anterior llega al comienzo
if($anterior<0){ $anterior=count($animales)-1;}

?>

<a class="btn" href="favoritos.php">Ver Lista de Favoritos</a>
<a class="btn" href="index.php" class="desactivado">Volver a Lista de Animales</a>
<div class="flex">
<a class="btn" href="ficha.php?animal=<? echo $animales[($anterior)]['nombre'];?>" class="desactivado">« Anterior</a>
<a class="btn" href="ficha.php?animal=<? echo $animales[$siguiente]['nombre'];?>" class="desactivado">Siguiente »</a>
</div>
</div>




<?php include 'cachinos/footer.php'; ?>



<?php
// echo "<pre>";
// var_dump($animales);
// echo "</pre>";
?>
