<?php

// · · · · · · · · · · · · · · · · · · · · · · · 
// 0. SISTEMA DE DEBUGGING · · · · · · · · · · ·
// · · · · · · · · · · · · · · · · · · · · · · ·
    //Depurado 1=true / 0=false;
    $debugging=0;

    //Si debuggin está activado
    if($debugging){
        echo '<div class="debugging">funciones.php cargado correctamente</div>';

        echo '<style>
        *{border:solid 1px red;}
        </style>';
        }


// prr($imagenes,"imagenes de lista");
function prr($v,$txt){
    global $debugging;
    if($debugging){
    echo '<div class="alert">';
    echo "print_r: ".$txt;
    echo "<pre>";
    print_r($v);
    echo "</pre>";
    echo '</div>';
    }
}


 // debuggin('Footer Cargado');
 function debugging($mensaje){
    global $debugging;
    if($debugging){
        echo '<div class="debugging">'.$mensaje.'</div>';

    }
    
}




?>