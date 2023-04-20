</main>

<?

      //leer contenido de json
      $datosjson= file_get_contents("JSON/datos.json");
  
      //convertir json en array php
      $animales= json_decode($datosjson,true);


  ?>


<div class="bloque_favoritos">
<?php if(count($favoritos) >0): ?>
    <h3>Favoritos:</h3>
<ul class="mini_favoritos">
    <?php foreach($favoritos as $favorito): ?>
        <li>
        <a href="./ficha.php?animal=<?php echo $favorito; ?>">
            <img src="img/<?php 
            foreach($animales as $animal){
                if($favorito == $animal['nombre']){
                    echo $animal['img'];
                }
            }         
            ?>" alt="<?php echo $favorito; ?>">
            <span><?php echo $favorito; ?></span>
        </a>
        </li><br>
    <?php endforeach; ?>
</ul>
<?php else: ?>
<a href="index" class="btn">Ir a Catálogo para añadir favoritos</a>
<?php endif; ?>
</div>


<footer>
    <p>&copy; Copyright - La Granja de Richard <? echo date('Y')?></p>
</footer>

</body>
</html>