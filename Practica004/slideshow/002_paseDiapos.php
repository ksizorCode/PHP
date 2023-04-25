<!DOCTYPE html>
<html>
<head>
  <title>Slideshow en JavaScript</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>Pase de diapositivas en JavaScript cargadas desde un array (sin PHP)</h1> 

  <div id="paseDiapos">
    <button id="antBtn" onclick="cargar(-1)">Anterior</button>
    <button id="sigBtn" onclick="cargar(1)">Siguiente</button>
    <br>
    <img id="diapo" src="" />
   </div>


<script>

const imagenes = ["001.jpg", "002.jpg", "003.jpg"];
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
