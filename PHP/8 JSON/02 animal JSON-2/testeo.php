<?php
if (isset($_POST['guardar_json'])) {
  $json_data = $_POST['json_data'];

  // Decodifica el JSON
  $datos = json_decode($json_data);

  // Guarda los datos en un archivo
  file_put_contents('JSON/datos.json', json_encode($datos));
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ejemplo guardar JSON en PHP</title>
</head>
<body>
  <form method="post">
    <textarea name="json_data"></textarea>
    <button type="submit" name="guardar_json">Guardar</button>
  </form>
</body>
</html>
