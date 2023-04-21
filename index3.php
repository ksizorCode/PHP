<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  
</body>
</html>

<?php

// Directorio raíz
$dir = './';

// Archivos a descartar
$descartados = array('.htacces', '.config', '.git', 'index.php');

// Lista de extensiones y sus correspondientes iconos de Font Awesome
$iconos = array(
    'pdf' => 'far fa-file-pdf',
    'jpg' => 'far fa-file-image',
    'png' => 'far fa-file-image',
    'doc' => 'far fa-file-word',
    'docx' => 'far fa-file-word',
    'xls' => 'far fa-file-excel',
    'xlsx' => 'far fa-file-excel',
    'ppt' => 'far fa-file-powerpoint',
    'pptx' => 'far fa-file-powerpoint',
    'zip' => 'far fa-file-archive',
    'rar' => 'far fa-file-archive',
    'txt' => 'far fa-file-alt',
    'html'=> 'far fa-file-code',
    'css'  => 'fab fa-css3-alt',
    'js'  => 'fab fa-js-square',
    'json' => 'fas fa-file-alt',
    'php' => 'fab fa-php'
);

// Función para obtener el icono correspondiente a la extensión del archivo
function obtenerIcono($archivo, $iconos) {
    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
    if (array_key_exists($extension, $iconos)) {
        return $iconos[$extension];
    } else {
        return 'far fa-file';
    }
}

// Función para mostrar el árbol de carpetas y archivos
function mostrarDirectorio($dir, $iconos, $descartados) {
    $archivos = scandir($dir);
    echo '<ul>';
    foreach ($archivos as $archivo) {
        if (!in_array($archivo, $descartados) && $archivo != '.' && $archivo != '..') {
            $rutaCompleta = $dir . '/' . $archivo;
            if (is_dir($rutaCompleta)) {
                // Si es una carpeta, mostrar el nombre y un enlace para abrirla
                echo '<li><a href="' . $rutaCompleta . '"><i class="far fa-folder"></i> ' . $archivo . '</a>';
                mostrarDirectorio($rutaCompleta, $iconos, $descartados);
                echo '</li>';
            } else {
                // Si es un archivo, mostrar el nombre con el icono correspondiente
                $icono = obtenerIcono($archivo, $iconos);
                echo '<li><a href="' . $rutaCompleta . '"><i class="' . $icono . '"></i> ' . $archivo . '</a></li>';
            }
        }
    }
    echo '</ul>';
}

// Mostrar el árbol de carpetas y archivos del directorio raíz
mostrarDirectorio($dir, $iconos, $descartados);

?>
