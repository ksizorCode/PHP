  
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el nombre del archivo de respaldo desde el usuario
    $nombre_archivo = isset($_POST['nombre_archivo']) ? $_POST['nombre_archivo'] : 'backup_' . date('Ymd_His') . '.json';
    // Si el valor está vacío insertar fecha de hoy como nombre
    if (empty($nombre_archivo)) {
        $nombre_archivo = 'backup_' . date('Ymd_His');
    }

    // Verificar el formato elegido por el usuario y agregar la extensión correspondiente
    switch ($_POST['formato'] ?? 'json') {
        case 'json':
            $nombre_archivo .= '.json';
            $content_type = 'application/json';
            break;
        case 'txt':
            $nombre_archivo .= '.txt';
            $content_type = 'text/plain';
            break;
        case 'html':
            $nombre_archivo .= '.html';
            $content_type = 'text/html';
            break;
        case 'csv':
            $nombre_archivo .= '.csv';
            $content_type = 'text/csv';
            break;
        default:
            die('Formato de archivo no válido');
    }

    // Leer el archivo JSON y decodificarlo en un array de PHP
    $json = file_get_contents('JSON/datos.json');
    $animales = json_decode($json, true);

    // Convertir el array en una cadena JSON, TXT, HTML o CSV y escribir en el archivo de respaldo
    switch ($_POST['formato'] ?? 'json') {
        case 'json':
            $backup = json_encode($animales, JSON_PRETTY_PRINT);
            break;
        case 'txt':
            $backup = implode("\n", array_map(function($a) { return implode("\t", $a); }, $animales));
            break;
            case 'html':
                $backup = '<table>';
                $backup .= '<tr><th>Nombre</th><th>Raza</th><th>Comida</th><th>Imágen</th><th>Hábitat</th></tr>';
                foreach ($animales as $animal) {
                    $backup .= '<tr>';
                    $backup .= '<td>' . $animal['nombre'] . '</td>';
                    $backup .= '<td>' . $animal['raza'] . '</td>';
                    $backup .= '<td>' . $animal['comida'] . '</td>';
                    $backup .= '<td><img src="' . $animal['img'] . '"></td>';
                    $backup .= '<td>' . $animal['habitad'] . '</td>';
                    $backup .= '</tr>';
                }
                $backup .= '</table>';
                break;
            case 'csv':
            $backup = implode(',', array_keys($animales[0])) . "\n";
            foreach ($animales as $animal) {
                $backup .= implode(',', $animal) . "\n";
            }
            break;
    }
    file_put_contents($nombre_archivo, $backup);
    
    // Forzar la descarga del archivo de respaldo
    header('Content-Type: ' . $content_type);
    header('Content-Disposition: attachment; filename=' . $nombre_archivo);
    header('Pragma: no-cache');
    readfile($nombre_archivo);
    exit();
} else {
    // Mostrar el formulario para que el usuario pueda elegir el formato y el nombre del archivo de respaldo
    echo "ta mal algo";
    }
    ?>

  