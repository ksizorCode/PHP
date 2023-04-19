<? include 'cachinos/header.php'; ?>
<?
function obtener_hora_actual() {
    date_default_timezone_set('Europe/Madrid'); // establecer la zona horaria a España
  
    $dias_semana = array("dom", "lun", "mar", "mie", "jue", "vie", "sab");
    $meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
  
    $hora_actual = date("H:i:s");
    $dia_semana_actual = $dias_semana[date("w")];
    $mes_actual = $meses[date("n") - 1];
    $fecha_actual = $dia_semana_actual. date("d"). $mes_actual. date("Y");
  
    $nombre_archivo = "Backup-".$fecha_actual."-".$hora_actual;
  
    //return strtolower($nombre_archivo);
    return $nombre_archivo;
  }
  
  
 
?>

<form action="backup_download.php" method="post">
        <label for="nombre_archivo">Nombre del archivo:</label>
        <input type="text" name="nombre_archivo" id="nombre_archivo" value="<? echo obtener_hora_actual();?>">
        <label for="formato">Formato:</label>
        <select name="formato" id="formato">
            <option value="json">JSON</option>
            <option value="txt">TXT</option>
            <option value="html">HTML</option>
            <option value="csv">CSV</option>
        </select>
        <input type="submit" value="Descargar backup">
    </form>
    <? include 'cachinos/footer.php'; ?>