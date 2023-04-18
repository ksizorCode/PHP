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

if(isset($_GET['diapo'])){
    $indice=$_GET['diapo'];  
}
else{
$indice=0;
}


//array con la lista de archivos de fotos
$fotos =scandir('./img/');
array_splice($fotos, 0, 2);

//var_dump($fotos);

//$fotos =['a.jpg','b.jpg','c.jpg','d.jpg'];


if($indice<count($fotos)-1){
$siguiente=$indice+1;
}
else{
    $siguiente=0;
}

if($indice>0){
$anterior=$indice-1;
}
else{
    $anterior=count($fotos)-1;
}


$aleatorio = rand(0, count($fotos)-1);


for($i=0;$i<count($fotos);$i++){
    if($indice==$i){
    $miclass="current";
    }
    else{
        $miclass="";
    }

    echo '<a class="btn '.$miclass.'" href="?diapo='.$i.'">'.($i+1).'</a>';
}
echo '<br>';
echo '<img src="img/'.$fotos[$indice].'">';

echo '<br>';
echo '<a href="index-5.php?diapo='.$siguiente.'">Siguiente</a>';
echo '<a href="index-5.php?diapo='.$anterior.'">Anterior</a>';

echo '<a href="index-5.php?diapo='.$aleatorio.'">Aleatorio</a>';




?>
  
</body>
</html>