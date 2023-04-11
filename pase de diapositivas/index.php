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
//array almacena el nombre de los elementos que hay en /img/
$fotos=scandir('./img/');
// el problema es que hay 2 elementos al comienzo que son. y .. que no nos interesan, por lo que borramos los dos primeros elementos del array:
array_splice($fotos, 0, 2);
// hacemos un var_dump para comprobarlo:




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
    

<img src="<?php echo $imagenActual;?>" alt="">

<br>
<?php 

for($i=0; $i<count($fotos); $i++){
    global $imagen; 
    if($imagen==$i){ $miclass='current';}
    else{$miclass="";}

    echo '<a class="btn '.$miclass.'" href="index.php?diapo='.$i.'">'.($i+1).'</a>';
}
?>
<br>
    <a href="index.php">Aleatoria</a>
    <a href="index.php?diapo=<?php echo $siguiente ?>">Siguiente</a>

    <!--
    Se carga via src gracias al php
    la ruta que previamente hemos generado
    en el códido anterior de PHP.
     "img/a.jpg" (por ejemplo)
    -->
   

    <?php 
   // var_dump($fotos);?>
  
</body>
</html>