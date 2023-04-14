<?php

//Iniciar Sesión
session_start();

$_SESSION['username']="Richard";
//me deriva a la página privado.php
header("Location: privado.php");
exit();

?>
