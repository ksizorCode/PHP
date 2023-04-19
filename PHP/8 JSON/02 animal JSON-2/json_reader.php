<?php include './cachinos/header.php'; ?>



<h1>JSON Reader</h1>




<?php
/*
// Ruta de la carpeta a leer
$carpeta = "./JSON";

// Array de archivos a excluir
$excluir = array('.', '..', '.htaccess', 'index.php');

// lee los archivos de la carpeta y filtra los que se deben excluir
$archivos = array_diff(scandir($carpeta), array('..', '.'), $excluir);

?>

<form action="">

<?php


// imprime los nombres de los archivos en un elemento select de HTML
echo '<select>';
foreach ($archivos as $archivo) {
    echo '<option value="' . $archivo . '">' . $archivo . '</option>';
}
echo '</select>';
*/


// ruta de la carpeta que contiene los archivos .json
$dir = './JSON';

// obtiene una lista de los archivos .json en la carpeta
$files = glob($dir . '/*.json');

// crea el elemento de selección (select)
echo '<select name="archivos">';

// itera sobre los archivos y los agrega como opciones en el select
foreach ($files as $file) {
    echo '<option value="' . $file . '">' . basename($file) . '</option>';
}

// cierra el elemento de selección
echo '</select>';
?>




</form>





</ul>
<a class="btn" href="./config.php"><i class="fa-regular fa-images"></i>Volver a Configuración</a>

<?php include './cachinos/footer.php'; ?>