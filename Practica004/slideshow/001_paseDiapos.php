<!DOCTYPE html>
<html>
<head>
  <title>Slideshow en JavaScript</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <h1>Carga por PHP de todas las imágenes de la carpeta img/</h1>
<?php
$dir = "img/";
$files = scandir($dir);
$formatos = array('jpg', 'jpeg', 'png', 'gif');

foreach($files as $file) {
  $extension = pathinfo($file, PATHINFO_EXTENSION);
  if(in_array($extension, $formatos)) {
    echo '<img src="' . $dir . '/' . $file . '" alt="' . $file . '" style="width: 100px; height: 100px; margin: 10px;">';
  }
}
?>


</body>
</html>
