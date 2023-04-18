<?php
// Array animales

$animales=[

 ["nombre"=>'Perro'   ,"raza"=>'Labrador' ,"comida"=>'omnívoro',    'img'=>'perro.jpg', 'habitad'=>'Domestico'],
 ["nombre"=>'Gato'    ,"raza"=>'Siames'   ,"comida"=>'omnívoro',    'img'=>'gato.jpg', 'habitad'=>'Domestico'],
 ["nombre"=>'Conejo'  ,"raza"=>'Enano'    ,"comida"=>'hervívoro',   'img'=>'conejo.jpg', 'habitad'=>'Tol mundo'],
 ["nombre"=>'Pato'    ,"raza"=>'Howard'   ,"comida"=>'hervívoro',   'img'=>'pato.jpg', 'habitad'=>'Asturies'],
 ["nombre"=>'Tigre'   ,"raza"=>'Bengala'  ,"comida"=>'carnívoro',   'img'=>'tigre.jpg', 'habitad'=>'Malasia'],
 ["nombre"=>'Elefante',"raza"=>'Africano' ,"comida"=>'hervívoro',   'img'=>'elefante.jpg', 'habitad'=>'África']

];

//convertir array a json
$animalesJSON = json_encode($animales);

//guardar el json en una archivo
file_put_contents("animales.json",$animalesJSON);








?>

<?php include 'cachinos/header.php'; ?>

    <h1>Reseteo</h1>
    <h2>JSON vuelto a construirse y guardado correctamente</h2>

    <a href="index.php">Ver Listado de Animales</a>

    <?php include 'cachinos/footer.php'; ?>

