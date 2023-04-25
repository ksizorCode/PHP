<?php
// Cargar datos del archivo JSON
$json_file = file_get_contents('datos.json');
$data = json_decode($json_file, true);
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>My Customers</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">



<table id="myTable">
<tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Country</th>
  </tr>

<?php
    //MOSTRAR LOS ELEMENTOS --------------------
    // Cargar datos del archivo JSON
     # $json_file = file_get_contents('datos.json');
     # $data = json_decode($json_file, true);

      // Mostrar elementos HTML
      foreach ($data['datos'] as $dato) {
      $clases = implode(' ', $dato['clases']); // Concatenar clases separadas por espacio
      echo '<tr>';
      echo '<td>'.$dato['contenido'].'</td>';
      echo '<td>'.$clases.'</td>';
      echo '</tr>';
      }
      
    ?>

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td,td2, i, txtValue, txt2Value, existe;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    existe=false;
    for (j=0; j<td.length;j++){
      if (td[j].innerText.toUpperCase().indexOf(filter) > -1) {
        existe=true;
      }
    }
    if (existe){
       tr[i].style.display = "";
    } else {
       tr[i].style.display = "none";
    }
      
  }
}

</script>

</body>
</html>
