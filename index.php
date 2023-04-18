<!DOCTYPE html><html><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Arhivos</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head><body>
  <header>
  <h1>Mi Listado de archivos PHP</h1>
  <nav>
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

function migasPan(){
  global $dir;
  $ruta_actual = '';
  echo '<ul class="migas">';
  $ruta_elementos = explode('/', $dir);
  echo '<li><a href="?ruta=./"> INICIO </a> / </li>';
  for($i=1;$i<count($ruta_elementos);$i++){
    if(!empty($ruta_elementos[$i])){
      $ruta_actual .= '/' . $ruta_elementos[$i];
      echo '<li><a href="?ruta=.'.$ruta_actual.'">'.$ruta_elementos[$i].'</a> / </li>';
    }
  }
  echo '</ul>';
}

//Mostrar Migas de Pan 
migasPan();
?>
</nav>
</header>

<main>

<ul class="grid" id="archivos">

<?php
foreach($archivos as $archivo){
  if (!in_array($archivo, $excluir)) {
    $es_carpeta = is_dir($dir. '/' . $archivo);
    // SI ES CARPETA
    if($es_carpeta){
      $ruta = $dir.'/'.$archivo;
      echo '<li class="folder">';
      echo '<a href="?ruta='.$ruta.'">';
      echo '<i class="far fa-folder"></i>';
      echo '<span>'.$archivo.'</span>';
      echo '</a>';
      echo '</li>';
    }
        // SI ES ARCHIVO
    else{
    
      if (in_array($archivo, $destacado)) {
        echo '<li class="file destacado">';
      }
      else{
      echo '<li class="file">';
    }
      echo '<a href="'.$dir.'/'.$archivo.'">';
      $extension= pathinfo($archivo, PATHINFO_EXTENSION);
      if(in_array($extension, array('jpg','jpeg','png','gif','webp'))){
        echo '<img src="'.$dir.'/'.$archivo.'" alt="'.$archivo.'">';

      }
      else{
      echo '<i class="far fa-file-alt"></i>';;
      }
      echo '<span>'.$archivo.'</span>';
      echo '</a>';
      echo '</li>';
    }

    
  }
}
?>
  
</ul>
</main>

<footer>
  <?php
  //Mostrar Migas de Pan 
migasPan(); 
  ?>
<p>Navigation System by Miguel Esteban <? echo date('Y');?></p>
</footer>

<script src="script.js"></script>

</body>
</html>










