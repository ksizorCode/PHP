<?php

// · · · · · · · · · · · · · · · · · · · · · · · 
// 0. SISTEMA DE DEBUGGING · · · · · · · · · · ·
// · · · · · · · · · · · · · · · · · · · · · · ·
    //Depurado 1=true / 0=false;
    $debuggin=0;

    //Si debuggin está activado
    if($debuggin){
        echo '<div class="debuggin">funciones.php cargado correctamente</div>';

        echo '<style>
        *{border:solid 1px red;}
        </style>';
        }

    // debuggin('Footer Cargado');
    function debuggin($mensaje){
        global $debuggin;
        if($debuggin){
            echo '<div class="debuggin">'.$mensaje.'</div>';

        }
        
    }



 
// · · · · · · · · · · · · · · · · · · · · · · 
// 1. SISTEMA CARGA DE ARCHIVOS · · · · · · · ·
// · · · · · · · · · · · · · · · · · · · · · · 

function cargar($valor){
    global $titulo;
    $cargar="";
    switch($valor)
    {
        case 'header';
        case 'cabecera';
            $cargar='header.php';
            break;
        case 'footer';
        case 'pie';
            $cargar='footer.php';
            break;
        default;
        $cargar=$valor.'.php';
        break;
    }
    include 'fragmentos/'.$cargar;
}
// - - - - - - - - - - - - - - - - - - - - - bye!
?>