<?php
$directorio = "img/";
$archivos = scandir($directorio);
$formatos = array('jpg', 'jpeg', 'png', 'gif');

$imagenes = array();
foreach ($archivos as $archivo) {
  $extension = pathinfo($archivo, PATHINFO_EXTENSION);
  if (in_array($extension, $formatos)) {
    $imagenes[] = $archivo;
  }
}
print_r($imagenes);

/*
$imagenes_nombres = array();
foreach ($imagenes as $imagen) {
 // $imagenes_nombres[] = str_replace('.' . $extension, '', $imagen); // si quisiera borrar la extensión
  $imagenes_nombres[] =  $imagen;
}
*/

$imagenes_json = json_encode($imagenes);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Slideshow en JavaScript</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Creamos un array JS con PHP a partir de los archivos que se encuentran en un directorio img/</h1> 

  <div id="paseDiapos">
    <button id="antBtn" onclick="cargar(-1)">Anterior</button>
    <button id="sigBtn" onclick="cargar(1)">Siguiente</button>
    <br>
    <img id="diapo" src="" />
   </div>


<script>
const imagenes = <?php echo $imagenes_json; ?>;
console.log(imagenes);

//const imagenes = ["001.jpg", "002.jpg", "003.jpg"];

const ruta = document.getElementById('diapo');
var diapo=0;

ruta.src="img/"+imagenes[diapo];


function cargar($v){
    diapo += $v;
    if(diapo >= imagenes.length){
        diapo = 0;
    }
    if(diapo < 0){
        diapo = imagenes.length - 1;
    }
    ruta.src = "img/" + imagenes[diapo];
}

</script>

</body>
</html>
