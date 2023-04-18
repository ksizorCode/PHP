<!DOCTYPE html><html><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Arhivos</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head><body>
  <h1>Mi Listado de archivos PHP</h1>
  <button onclick="cambiarVista()">Cambiar Vista</button>

<?php
// aquí comienza PHP  -------------------
// Array con los nombres de los archivos a excluir
$excluir = array('.', '..', '.git','.gitattributes','.DS_Store','Thumbs.db','README.md'); 
$destacado =array('index.html','index.php');
// Definimos la ruta 

$dir ='./';
if(isset($_GET['ruta'])){
  $dir = $_GET['ruta'];
}
$archivos=scandir($dir);

$ruta_actual = '';
$ruta_elementos = explode('/', $dir);
echo '<a href="?ruta=./"> INICIO </a> / ';
for($i=1;$i<count($ruta_elementos);$i++){
  if(!empty($ruta_elementos[$i])){
    $ruta_actual .= '/' . $ruta_elementos[$i];
    echo '<a href="?ruta=.'.$ruta_actual.'">'.$ruta_elementos[$i].'</a> / ';
  }
}
?>

<ul class="grid" id="archivos">

<?php
foreach($archivos as $archivo){
  if (!in_array($archivo, $excluir)) {
    $es_carpeta = is_dir($dir. '/' . $archivo);
    if($es_carpeta){
      $ruta = $dir.'/'.$archivo;
      echo '<li class="folder">';
      echo '<a href="?ruta='.$ruta.'">';
      echo '<i class="far fa-folder"></i>'.$archivo;
      echo '</a>';
      echo '</li>';
    }
    else{
      if (in_array($archivo, $destacado)) {
        echo '<li class="file destacado">';
      }
      else{
      echo '<li class="file">';
    }
      echo '<a href="'.$dir.'/'.$archivo.'">';
      echo '<i class="far fa-file-alt"></i>'.$archivo;
      echo '</a>';
      echo '</li>';
    }

    
  }
}
?>
  
</ul>
<script src="script.js"></script>

</body>
</html>










