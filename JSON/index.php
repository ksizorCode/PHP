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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <h1>Primer Json</h1>
    <h2>Json guardado correctamente</h2>

    <a href="leerjson.php">Abrir Lector del JSON</a>


</body>

</html>


