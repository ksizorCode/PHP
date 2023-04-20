<!DOCTYPE html><html><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Arhivos</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
 

<style>
  /* Sistema de Navegación de archivos PHP*/
:root {
  /*main colors*/
  --c1: lightblue;
  --c2: lightcoral;
  --l1: white;
  --l2: #EEE;
  --d1: black;
  --d2: grey;
  --ff: sans-serif;
  --mxw: 960px;
  --m: 20px;
  --t:0.3s;
}

body {
  font-family: var(--ff);
  max-width: var(--mxw);
  margin: 0 auto;
  padding: var(--m);
  box-sizing: border-box;
}

a {
  text-decoration: none;
  color: var(--c2)
}

p {
}

h1,h2,h3,h4,h5,h6 {
}

h1 {
}

h2 {
}

h3 {
}

h4 {
}

h5 {
}

h6 {
}

header, main, footer {
}

header {
}

main {
}

footer {
  padding: var(--m);
  text-align: center;
}

nav ul, .grid, .flex {
  padding-left: 0;
  list-style: none;
}

ul.migas{
  list-style:none;
  padding-left:0;
  display:flex;
  flex-wrap: wrap;
  align-content: center;
  justify-content: flex-end;
  gap: 6px;
  margin: 0;
}

footer ul.migas{
      justify-content: center;

}


.flex {
  display: flex;
  flex-wrap: wrap;
  gap: 8px
}

.grid {
  display: grid;
  grid-template-columns: repeat( auto-fit, minmax(121px, 1fr) );
  gap: 0.6em;
}

.grid li {
  background: var(--l2);
  border-radius: var(--m);
  text-align: center;
  padding: var(--m)
}

.grid li {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.grid li i {
  display: block;
  clear: both;
  font-size: 5rem;
}

img {
  max-width: 100%
}

a i {
  padding: 8px;
}

li, a, li a, li a i {
  transition: 0.2s;
}

li a {
  color: var(--c2);
}

li:hover {
  background: var(--c2);
}

li:hover a {
  color: var(--d1)
}

li a span {
  font-size: 12px;
  display: block;
  hyphens: auto;
  text-overflow: ellipsis;
}

/* Vista tipo lista */
.grid.lista {
  grid-template-columns: 1fr;
}

.grid.lista li {
  flex-direction: row;
  padding: 4px;
  background: none;
  border: #EEE solid 2px;
  border-radius: 30px;
}

.grid.lista i {
  font-size: 20px;
  background: var(--c2);
  border-radius: 50%;
  color: var(--d1);
  margin-right: 10px;
}

.grid.lista i {
  font-size: 20px;
  background: var(--c2);
  border-radius: 50%;
  color: var(--d1);
  margin-right: 10px;
}

.grid.lista a {
  color: var(--d1)
}

.grid.lista li:hover {
  background: var(--l2)
}

.grid .destacado, .lista .destacado {
  background: var(--c2);
}

.grid .destacado i, .grid .destacado a, .lista .destacado i, .lista .destacado a {
  color: var(--l2);
}

.file img {
  max-width: calc(100% + 26px) !important;
  display: block;
  aspect-ratio: 1/1;
  object-fit: cover;
  border-radius: 10px;
  margin-left: -13px;
  margin-top: -13px;
  margin-right: -13px;
  margin-bottom: 10px;
}

header nav {
  display: grid;
  gap: 10px;
  grid-template-columns:1fr 4fr;
}



button {
  background:none;
  border:solid 2px var(--c2);
  border-radius:var(--m);
  padding:10px !important;
  color:var(--c2);
  transition:var(--t);
}

button:hover {
  background:var(--c2);
  color:var(--l2);
}
  </style>

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

<script>
  function cambiarVista() {
    var element = document.getElementById("archivos");
    element.classList.toggle("lista");
 }
</script>

</body>
</html>










