<?php 

$nombre = "Dani";

  $saludos = [
      'Hola',
      'Buenos días',
      'Chao!',
      'Good Morening',
      'Qué bolá',
      'Qué bueno que viniste',
      'Que tal ho!',
      'Qué tal por ahí'];

      

function saludar(&$nom, &$saludos){
    $nom ="pepe";
    echo "<h1>".$saludos[rand(0,count($saludos)-1)]." ".$nom.".</h1>";
}

saludar($nombre, $saludos);

echo "...";
echo $nombre;

?>

