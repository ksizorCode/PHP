<style>

:root{
  --c1:coral;
  --c2:lightgreen;
  --c3:grey;
}


.btn {
  max-width:320px;
  font-family: sans-serif;
  padding: 20px;
  background: var(--c1);
  border-radius: 8px;
  text-decoration: none;
  display: block;
  transition: 0.5s;
  text-align: center;
  margin: 10px auto;
  color:white;
 
}

.btn:hover {
  scale: 1.05;
  background: coral;
  color: white;
  letter-spacing:1px
}


.soson{
  border:  var(--c1) 2px solid;
  background: none;
  color: var(--c1);
}

.desactivado,
.desactivado:hover{
    border:  var(--c3) 2px solid;
  background: none;
  color: var(--c3);
  scale:1;
  letter-spacing:0;

  cursor:not-allowed;
}


    </style>



<?php
//botón para abrir una nueva pag en otra ventna
function botonucu($url,$texto, $clas,$vea ){
    $target="";
    if($vea){$target='target="_blank"';}
    echo '<a class="btn '.$clas.'" href="'.$url.'" '.$target.'>'.$texto.'</a>';
}

botonucu("https://www.elpais.es/", 'Alejandradas','soson',1);
botonucu("https://www.github.es/", 'Alejandradas','',0);
botonucu("https://www.google.es/", 'Alejandradas','desactivado',0);
botonucu("https://www.github.es/", 'Migueladas','soson',1);
botonucu("https://www.nasa.es/", 'Migueladas','',0);
botonucu("https://www.github.es/", 'Migueladas','desactivado',1);


?>