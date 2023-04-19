<? $titulo= 'Ficha'?>
<? include 'funciones.php'?>

<? cargar('header') ?>

    <?php
// · · · · · · · · · · · · · · · · · · · · · · · 
// 0. Comprobar qué info nos llega via GET · · · 
//    (miramos el buzón)
// · · · · · · · · · · · · · · · · · · · · · · ·  

    if(isset($_GET['nombre_ficha'])){
        $nombre_ficha = $_GET['nombre_ficha'];
    }

    if(isset($_GET['archivo_json'])){
        $archivo_json = $_GET['archivo_json'];
    }
    else{
        $archivo_json='datos.json'; // si no cargase el GET coje datos x defecto
    }


// · · · · · · · · · · · · · · · · · · · · · · · 
// 1. Cargar JSONS · · · · · · · · · · ·
// · · · · · · · · · · · · · · · · · · · · · · ·
//importar el JSON de la carpeta "JSON/"
$miJSON = file_get_contents('JSON/'.$archivo_json);

//convertir JSON a Array PHP
$datos = json_decode($miJSON, true);



// · · · · · · · · · · · · · · · · · · · · · · · 
// 3. Buscamos el nombre en el array · · · · · · · · · · ·
// · · · · · · · · · · · · · · · · · · · · · · ·  

    $ficha=$ficha = $datos[0];

    foreach($datos as $dato){
        if($dato['nombre'] == $nombre_ficha){
            $ficha = $dato;
        break; // sale del bucle (pa no seguir revisando totamente).
        }
    }

      //mostrar datos de la ficha

        echo '<div class="ficha">';
        echo '<img src="'.$ficha['img'].'">';
        echo '<h1>'.$ficha['nombre'].'</h1>';
        echo '<p>'.$ficha['texto'].'</p>';
        echo '<p><span>Year:</span>'.$ficha['year'].'</p>';
        echo '<p><span>Dato1:</span>'.$ficha['dato1'].'</p>';
        echo '<p><span>Dato2:</span>'.$ficha['dato2'].'</p>';
        echo '<a class="btn active" href="index.php">Volver a lista</a>';
        echo '</div>';


    

    // echo "<pre>";
    // print_r($datos);
    // echo "</pre>";
 
?>




<style>
    body{
        background-image:url('<?php echo $ficha['img']; ?>');
        }
</style>
<? cargar('footer') ?>