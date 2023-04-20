<?php
   
   // $dir = 'archivos/css';
   // $files = scandir($dir);
   // var_dump($files);


   // $directorio = 'archivos/css';
   // $ficheros1  = scandir($directorio);
   // $ficheros2  = scandir($directorio, 1);
    
   // var_dump($ficheros1);
   // print_r($ficheros2);




echo '<h1>scandir();</h1>';

echo '<ul class="flex">'

$dir = 'archivos/css'; // Reemplaza con la ruta al directorio que deseas listar
$archivos = scandir($dir);

// Recorrer los archivos y mostrarlos en pantalla con un enlace a cada archivo
foreach ($archivos as $archivo) {
  // Excluir los directorios "." y ".."
  if ($archivo !== '.' && $archivo !== '..') {
    // Crear un enlace al archivo
    echo '<li><a href="' . $dir . '/' . $archivo . '">' . $archivo . '</a></li>>';
  }
}

echo:'</ul>';


?>


