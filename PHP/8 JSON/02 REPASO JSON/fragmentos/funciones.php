<?php

//miAlerta('Aquí Titulo');

function miAlerta($titulo, $texto, $btn_txt, $btn_link, $fontAwesome_icon){
    echo "<div class='aviso'>";
    echo '<h2><i class="'.$fontAwesome_icon.'"></i>'.$titulo.'</h2>';
    echo '<p>'.$texto.'</p>';
    echo '<a href="'.$btn_link.'">'.$btn_txt.'</a>';
    echo "</div>";
}



// img('001.jpg','gatito');

function img($src, $alt){
    echo '<figure>';
    echo '<img src="img/'.$src.'" alt="'.$alt.'">';
    echo '</figure>';
}
// Esta fución me hace esto en el HTML:
// <img src="img/001.jpg" alt="gatito">




//Esta función me imprimira un print_r o var_dump del array que le pasemos
function verArray($valor){
    echo '<p>--- Mostrar contenido del Array ---</p>';
    echo '<pre>';
    print_r($valor);
    echo '</pre>';
    echo '--- Fin de Array ---';
}
//verArray($datos);



?>