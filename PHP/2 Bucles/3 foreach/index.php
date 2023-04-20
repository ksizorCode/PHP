<?
$alumnos = [
    ["Fran",   "Santos",   "Gijon",    "001.jpg"],
    ["Richard", "Beaugrand","Gijon",    "002.jpg"],
    ["Jess",    "Garcia",   "Gijon",    "003.jpg"],
    ["Bea",     "Perez",    "Gijon",    "005.jpg"],
    ["Laura",   "Pausini",  "Oviedo",   "007.jpg"],
    ["Ale",     "Bueno",    "Cuba",     "004.jpg"],
    ["Erick",   "Diaz",     "Luanco",   "007.jpg"],
    ["Fernando","Rodriguez","Oviedo",   "008.jpg"],
    ["August",  "Lunar",    "Oviedo",   "009.jpg"],
    ["Dani",    "Lunar",    "Oviedo",   "010.jpg"],
    ["Javi",    "Lunar",    "Oviedo",   "011.jpg"]
];


echo '<h1>---Var DUMP--</h1>';
var_dump($alumnos);


echo '<h1>---PRINT_R--</h1>';
echo "<pre>";
print_r($alumnos);
echo "</pre>";



echo '<h1>---FOR--</h1>';

for ($i=0; $i<count($alumnos); $i++) {
    echo '<li>'.$alumnos[$i][0].'</li>';
}


echo '<h1>---FOREACH--</h1>';

foreach ($alumnos as $alumno) {
    echo '<li>'.$alumno[0].'</li>';
}

echo '<h1>---WHILE--</h1>';
$x=0;

while ($x < count($alumnos)) {
    echo '<li>'.$alumnos[$x][0].'</li>';
    $x++;
}

echo '<h1>---DO WHILE--</h1>';
$y=0;

do{
   echo '<li>'.$alumnos[$y][0].'</li>';
   $y++;
}while ($y < count($alumnos));



?>


<H2>Ejemplo 2</H2>

<?php

$Provincias=[
    'Asturias',
    'Murcia',
    'Andalucia',
    'Cantabria',
    'Galicia',
    'Pais Vasco',
    'Cataluña'
];

foreach($Provincias as $cachito){
    echo '<p>'.$cachito.'</p>';
}


?>


<H2>Ejemplo 3</H2>
<?php
//array multidimensional
$alumnos2 = [
    ["Frank",   "Santos",   "Gijon",    "001.jpg"],
    ["Richard", "Beaugrand","Gijon",    "002.jpg"],
    ["Jess",    "Garcia",   "Gijon",    "003.jpg"],
    ["Bea",     "Perez",    "Gijon",    "005.jpg"],
    ["Laura",   "Pausini",  "Oviedo",   "007.jpg"],
    ["Ale",     "Bueno",    "Cuba",     "004.jpg"],
    ["Erick",   "Diaz",     "Luanco",   "007.jpg"],
    ["Fernando","Rodriguez","Oviedo",   "008.jpg"],
    ["August",  "Lunar",    "Oviedo",   "009.jpg"],
    ["Dani",    "Lunar",    "Oviedo",   "010.jpg"],
    ["Javi",    "Lunar",    "Oviedo",   "011.jpg"]
];

foreach ($alumnos2 as $individuo2) {
    echo '<li>';
    foreach ($individuo2 as $cosita){
    echo $cosita.' ';
    }
    echo '</li>';
}

?>