<? $titulo= 'Insertar'?>
<? include 'funciones.php'?>

<? cargar('header') ?>

    <?php
// 0. MOSTRAR SÓLO UN PERSONAJE )1 DATO) -------------------------------
   

    //importar el JSON de la carpeta "JSON/"
    $miJSON = file_get_contents('JSON/datos.json');

    //convertir JSON a Array PHP
    $datos = json_decode($miJSON, true);
  

    //mostrar datos en bonito (recorrer Array)
    
    $ficha = $datos[0];

        echo '<div class="ficha">';
        echo '<img src="'.$ficha['img'].'">';
        echo '<h2>'.$ficha['nombre'].'</h2>';
        echo '<p>'.$ficha['texto'].'</p>';
        echo '<p><span>Year:</span>'.$ficha['year'].'</p>';
        echo '<p><span>Dato1:</span>'.$ficha['dato1'].'</p>';
        echo '<p><span>Dato2:</span>'.$ficha['dato2'].'</p>';
        echo '</div>';


    

    // echo "<pre>";
    // print_r($datos);
    // echo "</pre>";
 
?>


<a class="btn" href="index.php">Volver a lista</a>


<style>
    body{
        background-image:url('<?php echo $ficha['img']; ?>');
        }
</style>
<? cargar('footer') ?>