<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Configurator</title>
    <link rel="stylesheet" href="bodorrio.css">
</head>
<body>
    <main>
    <h1>Bienvenidos al configurador de tarjetas de boda</h1>

    <form action="invitacion.php" method="post">
        <fieldset>
        <legend>Datos de la pareja</legend>
        
        <label for="n1">Nombre de cónyuge A: </label>
        <input type="text" id="n1" name="nombre1"><br><br>

        <label for="n2">Nombre de cónyuge B: </label>
        <input type="text" id="n2" name="nombre2"><br><br>
        </fieldset>
        
        <fieldset>
        <legend>Lugar y Fecha</legend>

        <label for="l1">Lugar: </label>
        <input type="text" id="l1" name="lugar"><br><br>

        <label for="f1">Fecha: </label>
        <input type="text" id="f1" name="fecha"><br><br>

        <label for="fr">Frase: </label>
        <input type="text" id="fr" name="frase"><br><br>
        </fieldset>

        <input type="submit" value="Crear Invitación">
    </form>
</main>
    
</body>
</html>