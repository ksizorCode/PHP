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


<?php 


// variable almacena el nombre de la carpeta que contiene las imágenes
$rutaImg='img';

// array que recoje todas las fotos con las que voy a trabajar
$fotos =['a.jpg', 'b.jpg', 'c.jpg', 'd.jpg'];

// variable almacena un número aleatorio entre 0 y 3
$aleatorio = rand(0,count($fotos)-1);
echo '<!--'.$aleatorio.'-->';
// variable que almacena la diapositiva que mostrará (elemento en el array)
$diapo=$aleatorio;

//variable que almacena el nombre de la ruta de la imagen que voy a cargar ahora
$imagenActual = $rutaImg.'/'.$fotos[$diapo];

//Reduciendo el código anterior a lo mínimo:
// $fotos =['a', 'b', 'c', 'd'];
// $imagenActual = 'img/'.$fotos[rand(0,count($fotos)-1)].'.jpg';

?>

    <img src="<?php echo $imagenActual;?>" alt="">
    <a href="#">Siguiente</a>



<script>
console.log(<?php echo $aleatorio;?>);
</script>

</body>
</html>