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
    

<style>
img{max-width:100px ;}

</style>

<?php

//array
$alumnos = [
    "fran","richard","bea","jess","yo","laura","erick","fernado","august","dani","javi"];
    // FOR
    for ($i = 0; $i<=count($alumnos)-1; $i++) {
         echo "<li>".$alumnos[$i]."</li>";
        
    }
echo "la cantidad de alumnos hoy es: ".count($alumnos);
?>

<ul>
<?  
//array multidimensional
$alumnos2 = [
    ["frank",   "santos",   "gijon",    "001.jpg"],
    ["richard", "beaugrand","gijon",    "002.jpg"],
    ["jess",    "garcia",   "gijon",    "003.jpg"],
    ["bea",     "perez",    "gijon",    "005.jpg"],
    ["laura",   "pausini",  "oviedo",   "007.jpg"],
    ["yo",      "mismo",    "cuba",     "004.jpg"],
    ["erick",   "diaz",     "luanco",   "007.jpg"],
    ["fernando","rodriguez","oviedo",   "008.jpg"],
    ["august",  "lunar",    "oviedo",   "009.jpg"],
    ["dani",    "lunar",    "oviedo",   "010.jpg"],
    ["javi",    "lunar",    "oviedo",   "011.jpg"]
];
// FOR

for ($i = 0; $i<count($alumnos2); $i++) {
    echo "<li>";
    echo '<img src="imagenes/'.$alumnos2[$i][3].'">';
// aquí   <img src="imagenes/     001.jpg        ">

    echo "<h3>".$alumnos2[$i][0]." ".$alumnos2[$i][1]."</h3>";
    echo "<p>".$alumnos2[$i][2]."</p>";
    echo "</li>";
   }


?>
</ul>
</body>
</html>