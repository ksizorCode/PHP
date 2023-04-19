<? include 'cachinos/header.php';?>


<?php
if(isset($_POST['submit'])){
  // Establecer la carpeta de destino para la imagen subida
  $target_dir = "img/";

  // Obtener el nombre de archivo y la ubicación temporal del archivo en el servidor
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $temp_file = $_FILES["image"]["tmp_name"];

  // Comprobar si la imagen es válida
  $check = getimagesize($temp_file);
  if($check === false) {
    echo "<p>El archivo seleccionado no es una imagen.</p>";
    exit();
  }

  $image_url = $target_dir . basename($_FILES["image"]["name"]);

  // Comprobar si el archivo ya existe en la carpeta de destino
  if (file_exists($target_file)) {
    echo "<p><img src='$image_url'></p>";
    echo "<p>El archivo  ". basename( $_FILES["image"]["name"]). " ya existe.</p>";
    echo "<a href='./upload.php'>Cargar otra imagen</a>";
    exit();
  }

  // Comprobar el tamaño máximo del archivo (en bytes)
  $max_size = 1000000; // 1MB
  if ($_FILES["image"]["size"] > $max_size) {
    echo "<p>El archivo es demasiado grande.</p>";
    echo "<a href='./upload.php'>Cargar otra imagen</a>";

    exit();
  }

  // Permitir solo ciertos tipos de archivo
  $allowed_types = array("jpg", "jpeg", "png", "gif");
  if(!in_array($imageFileType, $allowed_types)) {
    echo "<p>Solo se permiten archivos JPG, JPEG, PNG y GIF.</p>";
    echo "<a href='./upload.php'>Cargar otra imagen</a>";

    exit();
  }

   // Comprobar la resolución máxima permitida de la imagen (en píxeles)
  $max_width = 1900;
  $max_height = 1200;
  if($check[0] > $max_width || $check[1] > $max_height) {
    echo "<p>La resolución de la imagen no puede superar los 1900x1200 píxeles.</p>";
    echo "<a href='./upload.php'>Cargar otra imagen</a>";

    exit();
  }




  // Subir la imagen al servidor
  if (move_uploaded_file($temp_file, $target_file)) {
    echo "<p><img src='$image_url'></p>";
    echo "<p>La imagen ". basename( $_FILES["image"]["name"]). " ha sido subida correctamente:</p>";
    echo "<a href='./upload.php'>Cargar otra imagen</a>";


  } else {
    echo "Error al subir la imagen.";
    echo "<a href='./upload.php'>Cargar otra imagen</a>";

  }
}
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      <label for="image">Seleccionar imagen:</label>
      <input type="file" name="image" id="image">
      <input type="submit" name="submit" value="Subir imagen">
      <p>La imagen (JPG, JPEG, GIF o PNG) ha de ser menor de 1MB y no superar los 1900x1200 píxeles.</p>
    </form>
    
    <a class="btn" href="./media_library.php"><i class="fa-solid fa-photo-film"></i>Ver Biblioteca Multimedia</a>

    <? include 'cachinos/footer.php';?>

 
