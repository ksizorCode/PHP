<?php

// Comprobamos si ya hay productos seleccionados como favoritos
if(isset($_COOKIE["favoritos"])) {
    $favoritos = unserialize($_COOKIE["favoritos"]);
} else {
    $favoritos = array();
}

// Si se presiona un botón "Añadir a favoritos" o "Quitar de favoritos"
if(isset($_POST["accion"]) && isset($_POST["producto"])) {
    $accion = $_POST["accion"];
    $producto = $_POST["producto"];

    // Si se ha presionado el botón "Añadir a favoritos"
    if($accion == "anadir") {
        // Añadimos el producto a la lista de favoritos
        $favoritos[] = $producto;

        // Guardamos la lista de favoritos en una cookie
        setcookie("favoritos", serialize($favoritos), time() + 3600);
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

      //leer contenido de json
      $datosjson= file_get_contents("JSON/datos.json");
  
      //convertir json en array php
      $animales= json_decode($datosjson,true);
    ?>

<?php include 'cachinos/header.php'; ?>
<h1>Lista de favoritos</h1>



    <?php if(count($favoritos) >0){
    echo '<ul class="tarjetas">';
     foreach($favoritos as $favorito){
       // echo '<li>'.$favorito.'</li>';
        foreach($animales as $animal){
            if($animal['nombre'] == $favorito){
            echo "<li>";
            echo "<img src='img/{$animal['img']}' alt='{$animal['nombre']}'>";
            echo "<h1>{$animal['nombre']}</h1>";
            echo "<div class='tablilla'>";
            echo "<p>Raza: {$animal['raza']}</p>";
            echo "<p>Alimentación: {$animal['comida']}</p>";
            echo "<p>Habitad: {$animal['habitad']} </p>";?>
            <?php if(in_array($animal["nombre"], $favoritos)): ?>
                <form method="post">
                    <input type="hidden" name="accion" value="quitar">
                    <input type="hidden" name="producto" value="<?php echo $animal["nombre"]; ?>">
                    <button type="submit">Quitar de favoritos</button>
                </form>
            <?php else: ?>
                <form method="post">
                    <input type="hidden" name="accion" value="anadir">
                    <input type="hidden" name="producto" value="<?php echo $animal["nombre"]; ?>">
                    <button type="submit">Añadir a favoritos</button>
                </form>
            <?php endif;
            echo '</div>';
            echo "</li>";
                
            }
        }
     }
    echo '</ul>';
    }
else{
    echo '<p>No hay favoritos.</p>';
}

?>

<a class="btn" href="index.php" class="desactivado">Volver a Lista de Animales</a>

<?php include 'cachinos/footer.php'; ?>