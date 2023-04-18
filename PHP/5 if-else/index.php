<?php
// IF

$edad=15;
if($edad>18){
echo "Qué mayor eres";
    if($edad>65){
        echo "Tira pa`Benidor";
    }

    else{
        echo "Cotiza";
    }
}

else if($edad=18){
    echo "Estás en el limite";
}
else {
    echo "Demasiado joven";
}


?>

<?php
$edad=20;
$desempleado=1;
$titulo= "Bachiller";
 
    

if($edad>17 && $desempleado && ($titulo=="ESO"||$titulo=="C3"||$titulo=="Bachiller")){

    echo " Puedes acceder al curso";}
    else{
        echo "No puedes acceder al curso";
    }
?>

<?php 

$password="gdgt#";

    if($password!="w_b23#"){
        echo "ERROR";
    }

?>