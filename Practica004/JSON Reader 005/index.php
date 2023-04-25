<style>
    ul{
        display:grid;
        gap:10px;
        grid-template-columns:1fr 1fr;
}
    </style>

<?php
  // Cargar datos del archivo JSON
  $json_file = file_get_contents('datos.json');
  $data = json_decode($json_file, true);

  // Número de obras por página
  $num_obras_por_pagina = 6;

  // Número total de páginas
  $num_paginas = ceil(count($data['datos']) / $num_obras_por_pagina);

  // Página actual
  $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

  // Índice de la primera obra de la página actual
  $indice_inicio = ($pagina_actual - 1) * $num_obras_por_pagina;

  // Índice de la última obra de la página actual
  $indice_fin = $indice_inicio + $num_obras_por_pagina - 1;
  if ($indice_fin >= count($data['datos'])) {
    $indice_fin = count($data['datos']) - 1;
  }

  echo '<ul>';
  // Mostrar obras de arte de la página actual
  for ($i = $indice_inicio; $i <= $indice_fin; $i++) {
    $obra = $data['datos'][$i];
    echo '<li>';
    echo '<h2>Título:'.$obra['c1'].'</h2>';
    echo '<p>Autor:</strong> '.$obra['c2'].'<p>';
    echo '<p>Fecha ejecución:</strong> '.$obra['c3'].'<p>';
    echo '<p>Año:</strong> '.$obra['c4'].'<p>';
    echo '<p>Ámbito:</strong> '.$obra['c5'].'</p>';
    echo '</li>';
  }
  echo '</ul>';

  // Mostrar botones de página siguiente y anterior si hay más de una página
  if ($num_paginas > 1) {
    echo '<p>';
    if ($pagina_actual > 1) {
      echo '<a href="?pagina='.($pagina_actual-1).'">Anterior</a> ';
    }
    if ($pagina_actual < $num_paginas) {
      echo '<a href="?pagina='.($pagina_actual+1).'">Siguiente</a>';
    }
    echo '</p>';
  }


  //texto al pie
  echo "Página ".$pagina_actual." de ".$num_paginas;    

?>
