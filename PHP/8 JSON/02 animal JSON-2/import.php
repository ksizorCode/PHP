<?php include 'cachinos/header.php'; ?>

    <h1>Importar backup</h1>

    <form action="import_archivo.php" method="post" enctype="multipart/form-data">
		<label for="archivo">Selecciona un archivo JSON:</label>
		<input type="file" id="archivo" name="archivo">
		<input type="submit" value="Subir archivo">
	</form>

    <?php include 'cachinos/footer.php'; ?>

