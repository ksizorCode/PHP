<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Arhivos</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Mi Listado de archivos PHP</h1>


<?php
// aquí comienza PHP  -------------------

$dir ='./';
$archivos=scandir($dir);
$excluir = array('.', '..', '.git','.gitattributes','README.md', 'index.php'); // Array con los nombres de los archivos a excluir

echo '<p class="ruta">'.$dir.'</p>';
?>


<button onclick="cambiarVista()">Cambiar Vista</button>
<ul class="grid" id="archivos">

<?php
// var_dump($archivos);

foreach($archivos as $archivo){
  //si los archivos no son los siguientes...
  //if($archivo!='.' && $archivo!='..'){
  if (!in_array($archivo, $excluir)) {

    // Determinar si el archivo es una carpeta o un archivo
    $es_carpeta = is_dir($dir. '/' . $archivo);
    // Agregar un icono diferente según si es una carpeta o un archivo
    if($es_carpeta){
      $icono ="far fa-folder";
    }
    else{
      $icono="far fa-file-alt";
    }
    //PHP MODERNO:(Reemplaza lo de arriba)
    // $icono = $es_carpeta ? 'far fa-folder' : 'far fa-file-alt';
    //fin del PHP MOderno
        echo '<li>';
        echo '<a href="'.$dir.'/'.$archivo.'">';
        echo '<i class="'.$icono.'"></i>'.$archivo;
        echo '</a>';
        echo '</li>';
  }
}

// aquí acaba PHP -----------------------------
?>
  
</ul>
<script src="script.js"></script>

</body>
</html>







<!---
<?php 
/*

<?php
$dir ='./';
if(isset($_GET['ruta'])){
  $dir = $_GET['ruta'];
}
$archivos=scandir($dir);
$excluir = array('.', '..', '.git','.gitattributes','README.md', 'index.php');

$ruta_actual = '';
$ruta_elementos = explode('/', $dir);
foreach($ruta_elementos as $elemento){
  if(!empty($elemento)){
    $ruta_actual .= '/' . $elemento;
    echo '<a href="?ruta='.$ruta_actual.'">'.$elemento.'</a> / ';
  }
}
?>

<button onclick="cambiarVista()">Cambiar Vista</button>
<ul class="grid" id="archivos">

<?php
foreach($archivos as $archivo){
  if (!in_array($archivo, $excluir)) {
    $es_carpeta = is_dir($dir. '/' . $archivo);
    if($es_carpeta){
      $icono ="far fa-folder";
      $ruta = $dir.'/'.$archivo;
      echo '<li>';
      echo '<a href="?ruta='.$ruta.'">';
      echo '<i class="'.$icono.'"></i>'.$archivo;
      echo '</a>';
      echo '</li>';
    }
    else{
      $icono="far fa-file-alt";
      echo '<li>';
      echo '<a href="'.$dir.'/'.$archivo.'">';
      echo '<i class="'.$icono.'"></i>'.$archivo;
      echo '</a>';
      echo '</li>';
    }
  }
}
?>



*/

?>
-->