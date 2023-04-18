<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<ul>
<?  
/* VALORES MINI-BASE DE DATOS*/
//Valores a cambiar en caso de necesidad
//Se ponen aquí arriba para que estén más a mano
$rutaImg="imagenes/";

//array multidimensional
$alumnos2 = [
    //puedo dejarlo todo feo y desordenado:
    ['apellido'=>"Santos",  'lugar'=>"Gijon",  'nombre'=>"Fran", 'foto'=>"001.jpg"],

    ['nombre'=>"Richard", 'apellido'=>"Beaugrand",   'lugar'=>"Gijon",   'foto'=>"002.jpg"],
    ['nombre'=>"Jess",    'apellido'=>"Garcia",      'lugar'=>"Gijon",   'foto'=>"003.jpg"],
    ['nombre'=>"Bea",     'apellido'=>"Perez",       'lugar'=>"Gijon",   'foto'=>"005.jpg"],
    ['nombre'=>"Laura",   'apellido'=>"Pausini",     'lugar'=>"Oviedo",  'foto'=>"007.jpg"],
    ['nombre'=>"Ale",     'apellido'=>"Malo",        'lugar'=>"Cuba",    'foto'=>"004.jpg"],
    ['nombre'=>"Erick",   'apellido'=>"Díaz",        'lugar'=>"Luanco",  'foto'=>"007.jpg"],
    ['nombre'=>"Fernando",'apellido'=>"Rodriguez",   'lugar'=>"Oviedo",  'foto'=>"008.jpg"],
    ['nombre'=>"August",  'apellido'=>"Díaz",        'lugar'=>"Oviedo",  'foto'=>"009.jpg"],
    ['nombre'=>"Dani",    'apellido'=>"Pérez",       'lugar'=>"Oviedo",  'foto'=>"010.jpg"],
    ['nombre'=>"Javi",    'apellido'=>"Martínez",    'lugar'=>"Oviedo",  'foto'=>"011.jpg"]
];



/* ------------------------------------------------------------------------------------------- */
/* PROGRAMACIÓN*/
// De aquí para abajo no se andarián modificando valores

// FOR

for ($i = 0; $i<count($alumnos2); $i++) {
    echo "<li>";
    echo '<img src="'.$rutaImg.$alumnos2[$i]['foto'].'">';
// aquí   <img src="imagenes/     001.jpg        ">

    echo "<h3>".$alumnos2[$i]['nombre']." ".$alumnos2[$i]['apellido']."</h3>";
    echo "<p>".$alumnos2[$i]['lugar']."</p>";
    echo "</li>";
   }
?>
</ul>
</body>
</html>