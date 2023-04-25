
<?php

// Leer el contenido del archivo JSON
$json_string = file_get_contents("datos.json");

// Decodificar el contenido del archivo JSON en un objeto PHP
$json_obj = json_decode($json_string);

// Acceder a la lista de datos y los nombres de los campos
$datos = $json_obj->datos;
$campos = $json_obj->campos;

// Recorrer la lista de datos y mostrar los valores de cada campo con sus nuevos nombres
foreach ($datos as $dato) {
  echo $campos->c1 . ": " . $dato->c1 . "<br>";
  echo $campos->c2 . ": " . $dato->c2 . "<br>";
  echo $campos->c3 . ": " . $dato->c3 . "<br><br>";
}

?>

