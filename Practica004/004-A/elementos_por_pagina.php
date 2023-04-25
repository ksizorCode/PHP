<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <?php
    $productos = array(
        "Calcetines de unicornio", 
        "Taza con forma de cactus", 
        "Pendientes de aro con estrellas", 
        "Collar con colmillo de tiburón", 
        "Bolígrafo de gel con aroma a sandía", 
        "Paquete de stickers de gatitos", 
        "Calcetines de aguacate", 
        "Lámpara de mesa con forma de piña", 
        "Libreta con tapa de mármol", 
        "Bolsa de playa con estampado tropical", 
        "Taza de té con filtro de unicornio", 
        "Set de llaveros con personajes de Star Wars", 
        "Pulsera de cuentas de colores", 
        "Botella de agua con diseño de flamenco", 
        "Auriculares inalámbricos con forma de conejito", 
        "Funda de móvil con diseño de mandala", 
        "Cartera con estampado de leopardo", 
        "Reloj de pulsera con correa de tela", 
        "Pack de velas aromáticas con fragancia de lavanda", 
        "Almohada de viaje con forma de panda"
    );

    // Obtener el parámetro 'pagina' de la URL
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    // Obtener el número de elementos por página del elemento 'select' de HTML
    $elementos_por_pagina = isset($_POST['elementos_por_pagina']) ? (int)$_POST['elementos_por_pagina'] : 8;

    // Calcular el índice inicial y final de los elementos que se mostrarán en esta página
    $inicio = ($pagina - 1) * $elementos_por_pagina;
    $fin = $inicio + $elementos_por_pagina;

    // Obtener los elementos que se mostrarán en esta página
    $productos_pagina = array_slice($productos, $inicio, $elementos_por_pagina);

    // Calcular el número total de páginas
    $num_paginas = ceil(count($productos) / $elementos_por_pagina);
    ?>

    <form method="post">
        <label for="elementos_por_pagina">Elementos por página:</label>
        <select id="elementos_por_pagina" name="elementos_por_pagina" onchange="this.form.submit()">
            <option value="8" <?php if ($elementos_por_pagina == 8) echo "selected"; ?>>8</option>
            <option value="12" <?php if ($elementos_por_pagina == 12) echo "selected"; ?>>12</option>
            <option value="16" <?php if ($elementos_por_pagina == 16) echo "selected"; ?>>16</option>
            <option value="20" <?php if ($elementos_por_pagina == 20) echo "selected"; ?>>20</option>
    </select>
    </form>

    <ul>
    <?php foreach ($productos_pagina as $producto) { ?>
        <li><?php echo $producto; ?></li>
    <?php } ?>
</ul>

<div>
    <?php if ($pagina > 1) { ?>
        <a href="?pagina=<?php echo $pagina - 1; ?>&elementos_por_pagina=<?php echo $elementos_por_pagina; ?>">Anterior</a>
    <?php } ?>

    <?php if ($pagina < $num_paginas) { ?>
        <a href="?pagina=<?php echo $pagina + 1; ?>&elementos_por_pagina=<?php echo $elementos_por_pagina; ?>">Siguiente</a>
    <?php } ?>
</div>

</body>
</html>