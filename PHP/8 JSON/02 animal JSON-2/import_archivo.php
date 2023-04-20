<?php include 'cachinos/header.php'; ?>
<h1>El archivo ha sido importado correctamente</h1>

<?php
// Obtener el archivo subido
$archivo = $_FILES['archivo'];

// Obtener el nombre y la extensión del archivo
$nombre_archivo = basename($archivo['name']);
$extension_archivo = pathinfo($nombre_archivo, PATHINFO_EXTENSION);

// Comprobar si el archivo es un archivo JSON
if($extension_archivo != 'json') {
    die('El archivo seleccionado no es un archivo JSON.');
}

// Mover el archivo subido a la carpeta deseada
$carpeta_destino = 'JSON/';
$ruta_archivo_destino = $carpeta_destino . 'datos.json';
if(move_uploaded_file($archivo['tmp_name'], $ruta_archivo_destino)) {
    echo '<p>El archivo se ha subido correctamente a la carpeta ' . $carpeta_destino.'</p>';
} else {
    echo '<p>Ha ocurrido un error al subir el archivo.</p>';
}
?>
<?php include 'cachinos/footer.php'; ?>
