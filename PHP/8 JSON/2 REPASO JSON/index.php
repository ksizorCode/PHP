<?php $titulo="Titulo de mi App"; ?>

<?php include 'fragmentos/header.php'?>

<h1>Bienvenidos a mi App</h1>

<?php

// Importar archivo JSON
$miJSON = file_get_contents('datos.json');

//Convertir JSON en Array PHP
$datos = json_decode($miJSON,true);

//verArray($datos); // esto no funcionará si no has creado la función
// echo '<pre>';
// var_dump($datos); 
// echo '</pre>';

echo '<ul class="galeria">';
//recorrer Array PHP y mostrar la info bonita en un li, con su imagen, etc...
foreach($datos as $dato){
    echo '<li>';
    echo '<img src="'.$dato['img'].'" alt="'.$dato['nombre'].'">';
    echo '<h2>'.$dato['nombre'].'</h2>';
    echo '<p>'.$dato['texto'].'</p>';
    echo '<p>Edad: '.$dato['year'].'</p>';
    echo '<p>Colores:'.$dato['dato1'].'</p>';
    echo '<p class="d2">1ª Aparicion:'.$dato['dato2'].'</p>';
    echo '</li>';
}
echo '</ul>';
?>


   
<?php miAlerta('Aquí Titulo','Esto es el texto que quiero que aparezca','Ver','404.php','fa-regular fa-bell');?>
<?php miAlerta('Aquí Otro texto','Holita','Leer chapa de texto','aviso-legal.php','fa-solid fa-triangle-exclamation');?>
<?php miAlerta('Hola Mundo','Otro texto diferente','Ir arriba','#','fa-solid fa-circle-radiation');?>





<?php include 'fragmentos/footer.php'?>