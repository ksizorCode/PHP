<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
// 0. LEE EL CÓDIGO POR BLOQUES DE ABAJOPARA ARRIBA: 3, 2, 1

if(isset($_GET['file'])){
    $archivoJSON = $_GET['file'];
}
else{
    $archivoJSON='datos.json';
}

// $archivoJSON='fran.json';
// 1. SI HEMOS PASADO UN PARAMETRO GET, CARGARLO



// 2. LISTAR ARCHIVOS .json DE CARPETA /JSON/ ------------------------------------
// $lista_archivos=['richard.json','fran.json','bea.json','laura.json','ale.json','augus.json','david.json','dani.json'];

$carpeta='./JSON/'; //carpeta que tenemos que analizar
$archivos=scandir($carpeta); // guardamos el array con el contenido de carpeta

//los dos primeros elementos del array son . y .. los borro:
$lista_archivos = array_slice($archivos,2);
?>
<h1>Mi lector de JSONs: <a href="<?php echo $carpeta.$archivoJSON; ?>"><span><?php echo $archivoJSON; ?></span></a></h1>

<!-- Dibujamos Select -->
<label for="archivoJSON">Selecciona un JSON a cargar como datos: </label>

<select name="file" id="archivoJSON" onchange="window.location.href='?file='+this.value;">
<option>Seleccione archivo</option>';

<?php 
foreach($lista_archivos as $archivo){
echo '<option value="'.$archivo.'">'.$archivo.'</option>';
}

echo "</select>";



// 3. MOSTRAR DATOS ------------------------------------
    //Nombre archivo JSON a importar
    //$archivoJSON='datos.json';

    //importar el JSON de la carpeta "JSON/"
    $miJSON = file_get_contents('JSON/'.$archivoJSON);

    //convertir JSON a Array PHP
    $datos = json_decode($miJSON, true);
    echo '<ul>';
    //mostrar datos en bonito (recorrer Array)
    foreach($datos as $ficha){
        echo '<li>';
        echo '<img src="'.$ficha['img'].'">';
        echo '<h2>'.$ficha['nombre'].'</h2>';
        echo '<p>'.$ficha['texto'].'</p>';
        echo '<p><span>Year:</span>'.$ficha['year'].'</p>';
        echo '<p><span>Dato1:</span>'.$ficha['dato1'].'</p>';
        echo '<p><span>Dato2:</span>'.$ficha['dato2'].'</p>';
        echo '</li>';
    }
    echo '</ul>';
?>

</body>
</html>