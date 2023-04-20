<?php include 'cachinos/header.php'; ?>
<h1>Insertar Nuevo Animal</h1>

<?php
// Ruta del archivo JSON
$archivo = 'JSON/datos.json';

// Comprobar si se ha enviado el formulario
if(isset($_POST['nombre']) && isset($_POST['raza']) && isset($_POST['comida']) && isset($_POST['img']) && isset($_POST['habitad'])) {
    // Obtener los valores del formulario y sanitizarlos
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $raza = filter_input(INPUT_POST, 'raza', FILTER_SANITIZE_STRING);
    $comida = filter_input(INPUT_POST, 'comida', FILTER_SANITIZE_STRING);
    $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
    $habitad = filter_input(INPUT_POST, 'habitad', FILTER_SANITIZE_STRING);

    // Cargar el archivo JSON existente
    $datos = file_get_contents($archivo);
    $datos_array = json_decode($datos, true);

    // Crear el nuevo elemento y agregarlo al arreglo
    $nuevo_elemento = array(
        'nombre' => $nombre,
        'raza' => $raza,
        'comida' => $comida,
        'img' => $img,
        'habitad' => $habitad
    );
    array_push($datos_array, $nuevo_elemento);

    // Convertir el arreglo a JSON y guardarlo en el archivo
    $datos_actualizados = json_encode($datos_array, JSON_PRETTY_PRINT);
    file_put_contents($archivo, $datos_actualizados);

    // Mostrar mensaje de confirmación al usuario
    echo '<p>Los nuevos datos han sido añadidos correctamente. El nombre del nuevo elemento es: <strong>' . $nombre . '</strong></p>';
}
?>

    <h1>Formulario para agregar elementos al archivo JSON</h1>
    <form name="miFormulario" method="POST" onsubmit="return validarFormulario()">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br>
        <label>Raza:</label><br>
        <input type="text" name="raza" required><br>
        <label>Comida:</label><br>
        <input type="text" name="comida" required><br>
        <label>Imagen:</label><br>
        <input type="text" name="img" required><br>
        <label>Habitad:</label><br>
        <input type="text" name="habitad" required><br><br>
        <input type="submit" value="Agregar elemento">
    </form>


<script>
        function validarFormulario() {
            var nombre = document.forms["miFormulario"]["nombre"].value;
            var raza = document.forms["miFormulario"]["raza"].value;
            var comida = document.forms["miFormulario"]["comida"].value;
            var img = document.forms["miFormulario"]["img"].value;
            var habitad = document.forms["miFormulario"]["habitad"].value;

            // Validación de campos vacíos
            if (nombre == "" || raza == "" || comida == "" || img == "" || habitad == "") {
                alert("Todos los campos son obligatorios");
                return false;
            }


              // Validación de etiquetas HTML y scripts
              var regexHTML = /<\/?[a-z][\s\S]*>/i;
            if (regexHTML.test(nombre) || regexHTML.test(raza) || regexHTML.test(comida) || regexHTML.test(habitad)) {
                alert("Los campos no pueden contener etiquetas HTML o scripts");
                return false;
            }

            // Validación de caracteres especiales
             var regex = /[^\w\s]/gi;
             if (regex.test(nombre) || regex.test(raza) || regex.test(comida) || regex.test(habitad)) {
                 alert("Los campos no pueden contener caracteres especiales");
                 return false;
            }

            // Validación de extensión de archivo
            var extensiones_validas = [".jpg", ".jpeg", ".png", ".gif"];
            var extension = img.substring(img.lastIndexOf("."));
            if (extensiones_validas.indexOf(extension.toLowerCase()) == -1) {
                alert("La imagen debe ser un archivo JPG, JPEG, PNG o GIF");
                return false;
            }
        }
    </script>
<?php include 'cachinos/footer.php'; ?>