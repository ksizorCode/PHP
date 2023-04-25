<?php
  // Cargar datos del archivo JSON
  $json_file = file_get_contents('datos.json');
  $data = json_decode($json_file, true);

  // Mostrar tabla con los datos
  echo '<table>';

  // Mostrar encabezados de columna
  echo '<tr>';
  foreach ($data['campos'] as $campo) {
    echo '<th>'.$campo.'</th>';
  }
  echo '</tr>';

  // Mostrar datos de cada obra
  foreach ($data['datos'] as $obra) {
    echo '<tr>';
    foreach ($data['campos'] as $clave => $campo) {
      if (isset($obra[$clave])) {
        echo '<td>'.$obra[$clave].'</td>';
      } else {
        echo '<td>-</td>';
      }
    }
    echo '</tr>';
  }

  echo '</table>';
?>
