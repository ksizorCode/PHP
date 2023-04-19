<?php
//CARGA DE DATOS AL JSON
    // Array con los datos 
    $datos=[
    ["nombre"=>'Perro'      ,   "raza"=>'Labrador'   ,    "comida"=>'omnívoro'    ,   'img'=>'perro.jpg'        ,     'habitad'=>'Domestico'    ],
    ["nombre"=>'Gato'       ,   "raza"=>'Siames'     ,    "comida"=>'omnívoro'    ,   'img'=>'gato.jpg'         ,     'habitad'=>'Domestico'    ],
    ["nombre"=>'Conejo'     ,   "raza"=>'Enano'      ,    "comida"=>'hervívoro'   ,   'img'=>'conejo.jpeg'      ,     'habitad'=>'Tol mundo'    ],
    ["nombre"=>'Pato'       ,   "raza"=>'Howard'     ,    "comida"=>'hervívoro'   ,   'img'=>'pato.jpg'         ,     'habitad'=>'Asturies'     ],
    ["nombre"=>'Tigre'      ,   "raza"=>'Bengala'    ,    "comida"=>'carnívoro'   ,   'img'=>'tigre.jpg'        ,     'habitad'=>'Malasia'      ],
    ["nombre"=>'Pangolín'   ,   "raza"=>'Pangolín'   ,    "comida"=>'hervívoro'   ,   'img'=>'pangolin.jpg'     ,     'habitad'=>'Asia'         ],
    ["nombre"=>'Ballena'    ,   "raza"=>'Ballena'    ,    "comida"=>'placton'     ,   'img'=>'ballena.jpeg'     ,     'habitad'=>'Océanos'      ],
    ["nombre"=>'Perezoso'   ,   "raza"=>'Vago'       ,    "comida"=>'hervívoro'   ,   'img'=>'perezoso.jpg'     ,     'habitad'=>'Arboleda'     ],
    ["nombre"=>'Zariguella' ,   "raza"=>'Roedor'     ,    "comida"=>'omnívoro'    ,   'img'=>'zariguella.jpg'   ,     'habitad'=>'Por ahí'      ],
    ["nombre"=>'Elefante'   ,   "raza"=>'Africano'   ,    "comida"=>'hervívoro'   ,   'img'=>'elefante.jpg'     ,     'habitad'=>'África'       ],
    ["nombre"=>'Pinguino'   ,   "raza"=>'Roedor'     ,    "comida"=>'omnívoro'    ,   'img'=>'pinguino.jpg'     ,     'habitad'=>'Por ahí'      ],
    ["nombre"=>'Pez'        ,   "raza"=>'Roedor'     ,    "comida"=>'omnívoro'    ,   'img'=>'pez.jpg'          ,     'habitad'=>'Por ahí'      ],
    ["nombre"=>'Tortuga'    ,   "raza"=>'Roedor'     ,    "comida"=>'omnívoro'    ,   'img'=>'tortuga.jpg'      ,     'habitad'=>'Por ahí'      ],
    ["nombre"=>'Burro'      ,   "raza"=>'Roedor'     ,    "comida"=>'omnívoro'    ,   'img'=>'burro.jpg'      ,     'habitad'=>'Por ahí'      ],
    ["nombre"=>'Foca'       ,   "raza"=>'Roedor'     ,    "comida"=>'omnívoro'    ,   'img'=>'foca.jpg'         ,     'habitad'=>'Por ahí'      ]
    ];

    //Convertir array a json
    $datosJSON = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    //Guardar el json en una archivo
    file_put_contents("JSON/datos.json",$datosJSON);
    //--- find e reseto del JSON

//RESETEO DE LAS IMÁGENES
    $origen= './images/';
    $destino = './img/';

    // Obtener todos los archivos de la carpeta "img"
    $files = glob($destino.'*');

    // Eliminar cada archivo de la carpeta "img"
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }

    // Array de imágenes a copiar
   // $imagenes = array("perro.jpg", "gato.jpg", "conejo.jpeg", "pato.jpg", "tigre.jpg", "pangolin.jpg", "ballena.jpg","elefante.jpg");
   $imagenes = array();
    foreach ($datos as $dato) {
        $imagenes[] = $dato['img'];
    }


    // Copiar cada imagen de la carpeta "images" a la carpeta "img"
    foreach ($imagenes as $imagen) {
        $src = $origen.$imagen;
        $dst = $destino.$imagen;
        if (file_exists($src)) {
            copy($src, $dst);
        }
    }

//BORRAR COOKIES
// Recorrer todas las cookies de $_COOKIE
foreach ($_COOKIE as $key => $value) {
    // Establecer la fecha de caducidad a una fecha anterior a la actual
    setcookie($key, "", time() - 3600, "/");
}

//---

$favoritos = array(); // Creamos un array vacío

// Limpiamos los elementos del array original
unset($favoritos);
$favoritos = array();
array_splice($favoritos, 0);

// Guardamos el array limpio en la cookie
setcookie("favoritos", serialize($favoritos), time() + (86400 * 30), "/");
    


?>


<?php $nocookies=true;?>
<?php include 'cachinos/header.php'; ?>

<div class="cube alert">
<i class="fa-solid fa-arrow-rotate-right fa-spin"></i>
<h1>Datos Reseteados</h1>
</div>

    <p>Los valores de datos.json han vuelto a los de fábrica</p>
    <p>Las imágenes han sido recargadas correctamente</p>

    <a class="btn" href="./media_library.php"><i class="fa-solid fa-photo-film"></i>Ver Bibliotaca Multimedia</a>
    <a class="btn" href="./config_JSON"><i class="fa-regular fa-pen-to-square"></i>Editar Base de Datos JSON</a>
    <a class="btn" href="./"><i class="fa-solid fa-table"></i>Ver Listado de Datos</a>
    <br>
    <br>
    <a class="btn" href="#" onclick="window.history.back(); return false;">‹ Volver</a>



    <?php include 'cachinos/footer.php'; ?>

