<!DOCTYPE html><html><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Arhivos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
  <link rel="stylesheet" href="_config/style.css?=<? echo time()?>">


</head><body>
  <header>
  <h1>Mi Listado de archivos PHP</h1>
  <nav>
  
<?php
// aquí comienza PHP  -------------------
// Array con los nombres de los archivos a excluir
$excluir = array('.', '..', '.git','.gitattributes','.DS_Store','Thumbs.db','README.md','_config'); 
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
  echo '<li><a href="?ruta=./"><i class="fa-solid fa-house"></i>INICIO</a></li>';
  for($i=1;$i<count($ruta_elementos);$i++){
    if(!empty($ruta_elementos[$i])){
      $ruta_actual .= '/' . $ruta_elementos[$i];
      echo '<li>›</li>';
      echo '<li><a href="?ruta=.'.$ruta_actual.'"><i class="far fa-folder"></i>'.$ruta_elementos[$i].'</a></li>';
    }
  }
  echo '</ul>';
}

//Mostrar Migas de Pan 
migasPan();
?>
  <button onclick="cambiarVista()">Cambiar Vista</button>

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
<p>Navigation System by Miguel Esteban <? echo date('Y');?> Versión 20abr - 0.56</p>
</footer>

<script>
  /*
  function cambiarVista() {
    var element = document.getElementById("archivos");
    element.classList.toggle("lista");
 }*/



// Obtener el elemento que quieres cambiar de clase
var elemento = document.getElementById('archivos');

// Obtener el valor almacenado en localStorage (si existe)
var valorLocalStorage = localStorage.getItem('mi-valor');

// Si el valor existe en localStorage, asignarlo como la clase del elemento
if (valorLocalStorage) {
  elemento.classList.toggle(valorLocalStorage);
}

// Agregar un event listener para detectar cambios en el elemento y actualizar el valor en localStorage
function cambiarVista(){
  // Cambiar la clase del elemento usando toggle()
  elemento.classList.toggle('lista');

  // Obtener la clase actual del elemento
  var nuevaClase = elemento.classList[0];

  // Almacenar la nueva clase en localStorage
  localStorage.setItem('mi-valor', nuevaClase);
}




</script>

</body>
</html>










