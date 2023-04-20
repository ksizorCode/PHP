<?php include 'cachinos/header.php'; ?>


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.4.0/codemirror.js"></script> 
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.4.0/codemirror.css"> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.4.0/mode/htmlmixed/htmlmixed.js"></script> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.4.0/mode/css/css.js"></script> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.4.0/mode/javascript/javascript.js"></script> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.4.0/mode/xml/xml.js"></script> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/lint/json-lint.min.js"></script> 
      <script type="text/javascript">
    var VanillaRunOnDomReady = function() {
var myCodeMirror = CodeMirror.fromTextArea(document.getElementById("editor"), {
    lineNumbers: true,
    mode: "htmlmixed"
});
var loadButton = document.getElementById("load");
loadButton.onclick = function () {
    // here you'd load your file and then call setValue
    myCodeMirror.setValue("<div>Hi There</div>\n<ul>\n\t<li>one</li>\n</ul>");
};
    }
var alreadyrunflag = 0;
if (document.addEventListener)
    document.addEventListener("DOMContentLoaded", function(){
        alreadyrunflag=1;
        VanillaRunOnDomReady();
    }, false);
else if (document.all && !window.opera) {
    document.write('<script type="text/javascript" id="contentloadtag" defer="defer" src="javascript:void(0)"><\/script>');
    var contentloadtag = document.getElementById("contentloadtag")
    contentloadtag.onreadystatechange=function(){
        if (this.readyState=="complete"){
            alreadyrunflag=1;
            VanillaRunOnDomReady();
        }
    }
}
window.onload = function(){
  setTimeout("if (!alreadyrunflag){VanillaRunOnDomReady}", 0);
}

</script> 





<h1>Reseteo</h1>

<?php
    if (isset($_POST['guardar_json'])) {
    $json_data = $_POST['json_data'];

    // Decodifica el JSON
    $datos = json_decode($json_data);

    // Guarda los datos en un archivo
    file_put_contents('JSON/datos.json', json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo '<h2>El nuevo JSON se ha guardado correctamente a las '.date("j F Y, G:i").'</h2>';
    }
    else{
        echo '<p>Resetee edite o descargue el archivo que almacena los valores de la base de datos.</p>';
    }

    //leer contenido de json
    $json= file_get_contents("JSON/datos.json");
?>




 <div class="grid g1-3">
    <div>
        <h2>Resetear JSON:</h2>
        <p>Vuelve a los valores de fábrica de datos.json</p>
        <a class="btn" href="reset.php"><i class="fa-solid fa-power-off"></i>Volver a JSON Original</a>
        <h2>Archivo JSON Guardado:</h2>
        <a class="btn" href="./JSON/datos.json" target="_blank"><i class="fa-solid fa-code"></i>Ver archivo.json</a>
        <a class="btn" href="./JSON/datos.json" download><i class="fa-solid fa-file-arrow-down"></i>Descargar archivo JSON al tu dispositivo</a>
        <a class="btn" href="./backup"><i class="fa-solid fa-file-zipper"></i>Exportar datos del JSON en otros formatos</a>
    </div>

    <div>
        <h2>Editar JSON:</h2>


        <form method="post">
            <?php 
                // Mostrar el JSON con formato bonito
                echo '<pre><textarea  name="json_data" id="editor">';
                echo $json;
                echo '</textarea></pre>';
            ?>
          <button onclick="copiarAlPortapapeles()" id="btn_copiar">Copiar al portapapeles</button>
          <button type="submit" name="guardar_json">Guardar este JSON</button>
          <p>Asegúrate de que el formato es el correcto. Esta acción guardará los cambios realizados y sustituirá el nuevo contenido por el del JSON original</p>
        </form>
    </div>
</div>



<script>
		function copiarAlPortapapeles() {
			var texto = document.getElementById("editor");

			// Selecciona el texto
			var seleccion = window.getSelection();
			var rango = document.createRange();
			rango.selectNodeContents(texto);
			seleccion.removeAllRanges();
			seleccion.addRange(rango);

			// Copia el texto seleccionado al portapapeles
			document.execCommand("copy");

			// Desselecciona el texto
			seleccion.removeAllRanges();

            document.querySelector('#btn_copiar').innerHTML="JSON Copiado al Portapapeles";
		}
	</script>

    <?php include 'cachinos/footer.php'; ?>







