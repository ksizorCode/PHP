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

    // array con productos
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

// Obtener el parámetro 'página' de la URL (código simplificado)
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

/*la línea anterio: obtiene GET. Si no existe? le asigna el número entero 1
  Es lo mismo que haber poner:
    $pagina = 1; // valor predeterminado

    if (isset($_GET['pagina'])) {
        $pagina = (int)$_GET['pagina'];
    }
*/


    // Calcular el índice inicial y final de los elementos que se mostrarán en esta página
    $inicio = ($pagina - 1) * 8;
    $fin = $inicio + 8;

  

    // Obtener los elementos que se mostrarán en esta página
    $productos_pagina = array_slice($productos, $inicio, 8);

    // Calcular el número total de páginas: elementos del array / 8
    $num_paginas = ceil(count($productos) / 8);
    // ceil redondea arriba al entero más cercano
    ?>

    <ul>
        <?php foreach ($productos_pagina as $producto) { ?>
            <li><?php echo $producto; ?></li>
        <?php } ?>
    </ul>

    <div>
        <?php if ($pagina > 1) { ?>
            <a href="?pagina=<?php echo $pagina - 1; ?>">Anterior</a>
        <?php } ?>

        <?php if ($pagina < $num_paginas) { ?>
            <a href="?pagina=<?php echo $pagina + 1; ?>">Siguiente</a>
        <?php } ?>
    </div>
</body>
</html>
