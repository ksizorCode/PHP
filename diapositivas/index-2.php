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

//array que almacena el nombre de los archivos
$fotos =['a.jpg', 'b.jpg', 'c.jpg', 'd.jpg'];

//si GET'diapo' existe...
if(isset($_GET['diapo'])){
    // igualamos su valor al de la variable $imagen
    $imagen = $_GET['diapo'];
}
// y si no (existe)
else{
    // me igualas la variable $imagen a un valor aleatorio entre 0
    // y el número máximo de elementos que tiene el array $fotos -1
    $imagen=rand(0,count($fotos)-1);
}

//variable igual a 'img/' más un elemento del array con los archivos
$imagenActual = 'img/'.$fotos[$imagen];

//Siguiente imagen:
if($imagen<count($fotos)-1){
$siguiente= $imagen+1;
}
else{
    $siguiente=0;
}

?>

<!-- Links a las diferentes opciones donde la URL del link contiene
referencias al método GET donde diapo=0 almacena el valor
que luego vamos a capturar por PHP y con el que vamos a trabajar --->
    <a href="index.php?diapo=0">Castillo China</a>
    <a href="index.php?diapo=1">Castillo Paris</a>
    <a href="index.php?diapo=2">Calle</a>
    <a href="index.php?diapo=3">Noria</a>
    <a href="index.php">Aleatoria</a>
    <a href="index.php?diapo=<?php echo $siguiente ?>">Siguiente</a>

    <!--
    Se carga via src gracias al php
    la ruta que previamente hemos generado
    en el códido anterior de PHP.
     "img/a.jpg" (por ejemplo)
    -->
    <img src="<?php echo $imagenActual;?>" alt="">
   
  
</body>
</html>