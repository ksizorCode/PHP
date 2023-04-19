<?php $titulo="Reseteo de JSON"; ?>

<?php include 'fragmentos/header.php'?>

<h1>Se ha reseteado correctamete la base de datos</h1>
<?php

$datos=[
    [
        'nombre'=>'Super Mario',
        'img'=>'https://upload.wikimedia.org/wikipedia/en/thumb/a/a9/MarioNSMBUDeluxe.png/220px-MarioNSMBUDeluxe.png',
        'texto'=>'Fontanero que viaja por tuberías y come setas.',
        'year'=>'25',
        'dato1'=>'rojo, negro y azul',
        'dato2'=>'Nintendo Nes'
    ],
    [
        'nombre'=>'Luigi',
        'img'=>'https://upload.wikimedia.org/wikipedia/en/7/73/Luigi_NSMBUDX.png',
        'texto'=>'Hermano de Mario',
        'year'=>'22',
        'dato1'=>'verde, negro y blanco',
        'dato2'=>'Super Nintendo'
    ],
    [
        'nombre'=>'Princesa Peach',
        'img'=>'https://upload.wikimedia.org/wikipedia/en/1/16/Princess_Peach_Stock_Art.png',
        'texto'=>'Es la princesa a la que rescatar.',
        'year'=>'23',
        'dato1'=>'rosa y amarillo',
        'dato2'=>'Game Boy '
    ],
    [
        'nombre'=>'Toad',
        'img'=>'https://upload.wikimedia.org/wikipedia/en/d/d1/Toad_3D_Land.png',
        'texto'=>'Es una seta amiga',
        'year'=>'desconocido',
        'dato1'=>'rojo y blanca',
        'dato2'=>'Super Nintendo'
    ],
    [
        'nombre'=>'Yoshi',
        'img'=>'https://upload.wikimedia.org/wikipedia/en/d/db/Yoshi_%28Nintendo_character%29.png',
        'texto'=>'Dragon raro',
        'year'=>'desconocido',
        'dato1'=>'verde, blanco y rojo',
        'dato2'=>'Super Nintendo'
    ],
    [
        'nombre'=>'Bowser',
        'img'=>'https://upload.wikimedia.org/wikipedia/en/9/92/Bowser_Stock_Art_2021.png',
        'texto'=>'Es el malo de los videojuegos',
        'year'=>'desconocido',
        'dato1'=>'amarillo, verde y naranja',
        'dato2'=>'Game Boy 1989'
    ]
];
####### verArray($datos); // Testeo - muestra el array formateado



//Convertir Array a JSON
$miJSON= json_encode($datos, JSON_PRETTY_PRINT);
####### echo'<pre>'.$miJSON.'</pre>';// Testeo - muestra el JSON formateado

//Guardar el texto formateado como JSON en archivo .json
file_put_contents('datos.json',$miJSON)









?>

<?php include 'fragmentos/footer.php'?>