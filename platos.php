<?php

header('Content-Type: text/html; charset=utf-8');
echo '<style type="text/css">';
include 'stylesheets/estilos.css';
echo '</style>';

$dbcon = new PDO("pgsql:dbname=clases_bd;host=localhost","sivicencio","");

$precio = 0;
if ($_GET['precio']){
	$precio =$_GET['precio'];
}

$sql= "SELECT name, description, price FROM plates WHERE price>'$precio';";
?>
<body>
<table class = contacto >
<tr>
<td>Plato</td>
<td>Descripción</td>
<td>Precio</td>
</tr>\n";


<?php foreach($dbcon->query($sql) as $row)
{
  echo "<tr>\n";
  echo "<td>" .$row['name'] ."</td>\n";
  echo "<td>" .$row['description'] ."</td>\n";
  echo "<td>" .$row['price'] ."</td>\n";
  echo "</tr>\n";
}
$dbcon = null;

?>
