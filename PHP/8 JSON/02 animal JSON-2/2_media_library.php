<?php include './cachinos/header.php'; ?>



<h1>Biblioteca Multimedia</h1>
<ul class="tarjetas">
<?php
// Ruta de la carpeta que contiene las imágenes y archivos multimedia
$dir_path = "./img";

// Obtenemos una lista de todos los archivos en la carpeta
$files = array_diff(scandir($dir_path), array('.', '..', '.htaccess', 'index.php'));

// Recorremos la lista de archivos
foreach($files as $file) {
  // Obtenemos el tamaño del archivo en bytes
  $file_size = filesize($dir_path . '/' . $file);
  // Convertimos el tamaño a KB o MB, dependiendo del tamaño del archivo
  if($file_size < 1024) {
    $file_size_formatted = $file_size . ' bytes';
  } else if($file_size < 1048576) {
    $file_size_formatted = round($file_size / 1024, 2) . ' KB';
  } else {
    $file_size_formatted = round($file_size / 1048576, 2) . ' MB';
  }

  // Obtenemos la fecha de última modificación del archivo
  $file_last_modified_formatted = date("j F Y, G:i", filemtime($dir_path . '/' . $file));

  // Comprobamos si el archivo es una imagen o un archivo multimedia
  if(in_array(pathinfo($file, PATHINFO_EXTENSION), array("jpg", "jpeg", "png", "gif", "mp4", "webm"))) {
    // Si el archivo es una imagen, mostramos una vista en miniatura
    if(in_array(pathinfo($file, PATHINFO_EXTENSION), array("jpg", "jpeg", "png", "gif"))) {
      echo '<li><a href="' . $dir_path . '/' . $file . '"><img src="' . $dir_path . '/' . $file . '"></a>';
      echo '<a href="' . $dir_path . '/' . $file . '">' . $file . '<br><small>(' . $file_size_formatted . ')<br>'.$file_last_modified_formatted.'</small></a>';
      echo '<form method="post" action="" onsubmit="return confirm(\'¿Está seguro de que desea eliminar la imagen?\');"><input type="hidden" name="filename" value="'.$file.'"><input type="submit" name="delete_file" value="Eliminar"></form>';
      echo '<form method="post" action="" id="renameForm_'.$file.'"><input type="hidden" name="filename" value="'.$file.'"><input type="hidden" name="newFilename" id="newFilename_'.$file.'" value=""><input type="button" name="rename_file" value="Renombrar" onclick="renameFile(\''.$file.'\')"></form></li>';
    }
    // Si el archivo es un archivo multimedia, mostramos un enlace
    else {
      // Mostramos el enlace con el nombre del archivo y el tamaño
      echo '<li><a href="'.$dir_path.'/'.$file.'">'.$file.'<br>('.$file_size_formatted.')<br>'.$file_last_modified_formatted.'</a>';
      echo '<form method="post" action=""><input type="hidden" name="filename" value="'.$file.'"><input type="submit" name="delete_file" value="Eliminar"></form></li>';
    }
  }
}




// Si se ha enviado el formulario para eliminar un archivo
if(isset($_POST['delete_file'])) {
  // Obtenemos el nombre del archivo a eliminar
  $filename = $_POST['filename'];
  // Creamos la ruta completa del archivo
  $file_path = $dir_path.'/'.$filename;
  // Si el archivo existe, lo eliminamos
  if(file_exists($file_path)) {
    unlink($file_path);
    // Recargamos la página para mostrar la lista actualizada de archivos
    header('Location: '.$_SERVER['PHP_SELF']);
  }
}



// Si se ha enviado el formulario para cambiar el nombre de un archivo
if(isset($_POST['rename_file'])) {
  // Obtenemos el nombre del archivo a cambiar y el nuevo nombre
  $filename = $_POST['filename'];
  $newFilename = $_POST['newFilename'];
  // Creamos la ruta completa del archivo y la ruta completa del nuevo nombre
  $file_path = $dir_path.'/'.$filename;
  $new_file_path = $dir_path.'/'.$newFilename;
  // Si el archivo existe y el nuevo nombre no existe, cambiamos el nombre
  if(file_exists($file_path) && !file_exists($new_file_path)) {
    rename($file_path, $new_file_path);
    // Recargamos la página para mostrar la lista actualizada de archivos
    header('Location: '.$_SERVER['PHP_SELF']);
  }
}


?>


</ul>
<a class="btn" href="./upload.php">Subir Imagen</a>

<?php include './cachinos/footer.php'; ?>