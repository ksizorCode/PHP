<?php
//Ejemplo básico de echo
echo "<p>Hola Mundo</p>";

//Echo y print hacen lo mismo
print "<p>Hola Mundo (otra vez)</p>";

//Variables en PHP
$saludo ="<p>Buenas tardes</p>";
echo $saludo;

//Funciones
function saludar(){
    return "<p>Que tal estas ho?</p>";
}
echo saludar();

//Funciones con parámetros
function saludando($nombre){
    //con comillas dobles se puede poner la variable sin más
    return "<p>¿Cómo estas $nombre?</p>";
}
echo saludando('María');
echo saludando ('Pedro');

//Funcion con el echo itegrado
function despedida($nombre){
    echo '<p class="info">Adios, Que tengas un buen día '.$nombre.'</p>';
}

despedida('Agapito');
despedida('Carmen');

?>

<style>
    .info{
        background:lightblue;
        padding:20px;
        border-radius:20px;
    }
</style>


