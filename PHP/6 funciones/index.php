<?php

// funcrion miboton(asdf, asdf){
// echo '<a href="#" class="btn">...</a>';
// }


// miboton('google.com',0);





function img($src, $alt){
//echo '<img class="img-fluid" src="'.$src.'" alt="'.$alt.'">';

echo '<img srcset="'.$src.'-320w.jpg,
            '.$src.'-480w.jpg 1.5x,
            '.$src.'-640w.jpg 2x"
     src="'.$src.'-640w.jpg" alt="'.$alt.'">';
}

// img('img/001.jpg', 'Atareder en Madrid');



function eti($eti ,$texto, $id, $cl){
echo '<'.$eti.' id="'.$id.'" class="titulo '.$cl.'" title="'.$texto.'">'.$texto.'</'.$eti.'>';
}

//h1('Hola Mundo','Titular01'. 'rojo destacado grande');

eti('p','Hola Mundo','Titular01', 'rojo destacado grande');
eti('h2','Especial Ofertas de verano','Titular02', 'rojo grande');
echo '<ul>';
eti('li','gato','', 'cosita');
eti('li','perro','', 'cosita');
eti('li','tortuga','', 'cosita');
eti('li','girafa','', 'cosita');
eti('li','caballo','', 'cosita');
echo '</ul>';
?>