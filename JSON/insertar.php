<?php include 'cachinos/header.php'; ?>
<h1>Insertar Nuevo Animal</h1>

<!--
["nombre"=>'Perro'   ,"raza"=>'Labrador' ,"comida"=>'omnívoro',    'img'=>'perro.jpg', 'habitad'=>'Domestico'],
-->

<form action="">
    <fieldset>
        <legend>Nombre e Imagen</legend>
        <div>
            <label for="n1">Nombre Animal:</label>
            <input type="text" id="n1" name="nombre" placeholder="Ej: Tortuga" require>
        </div>
        <div>
            <label for="i1">Imágen:</label>
            <input type="text" id="i1" name="img" placeholder="Ej: tortuga_001.jpg" require>
        </div>
    </fieldset>

    <fieldset>
        <legend>Datos básicos:</legend>
        <div>
            <label for="r1">Raza:</label>
            <input type="text" id="r1" name="raza" placeholder="Ej: Ninja" require>
        </div>

        <div>
            <label for="c1">Comida / Dieta:</label>
            <input type="text" id="c1" name="comida" placeholder="Ej: Omnívoro" require>
        </div>



        <div>
            <label for="h1">Hábitad:</label>
            <input type="text" id="h1" name="habitad" placeholder="Ej: Doméstica" require>
        </div>
    </fieldset>


    <input type="submit" value="Guardar Animal">
    <input type="reset" value="Borrar Datos Formulario" class="desactivado">



</form>

<?php include 'cachinos/footer.php'; ?>