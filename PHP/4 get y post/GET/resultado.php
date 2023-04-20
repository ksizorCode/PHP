<style>
   .bonito{
    font-family:"Comic Sans MS";
    color:coral;
    animation: anim1 2s infinite alternate;
    display:inline-block;
   } 

@keyframes anim1{
    0%{ rotate:-30deg;}
    100%{rotate:30deg;}
}

.noalumno, .alumno{
    padding:20px;
    border-radius:20px;
    text-align: center;
}

.noalumno{ background: lightseagreen;}
.alumno{ background: tomato;}

</style>


<?php
$nombre = $_GET["nombre"];
$nombreAnim =  "<span class='bonito'>".$nombre."</span>";
?>

<h1>Bienvenida <?echo $nombreAnim;?></h1>


<p>Tu teléféfono es el <?php echo $_GET["telefono"]?> </p>
<p>Hola <?echo $nombreAnim;?>, bienvenida.</p>
<p>Estamos encantados de tenerte aquí.</p>
<p>Esta semana <?echo $nombreAnim;?> hemos preprado unas ofertas especiales para ti.</p>


<?php

    if(($nombre != 'Alejandro') && ($nombre != 'Bea') && ($nombre != 'Richard')){
        echo "<p class='noalumno'>Vente pal curso ho! a aprender PHP y comer bizcocho</p>";
    }
    else{
        echo "<p class='alumno'> dejard de comer bizcocho y practicar PHP</p>";
    }



?>
