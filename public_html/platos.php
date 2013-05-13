<?php

header('Content-Type: text/html; charset=utf-8');
echo '<style type="text/css">';
include 'estilos.css';
echo '</style>';

$dbcon = new PDO("pgsql:dbname=grupo20;host=localhost","grupo20","MDA0MGQy");

$precio = 0;
if ($_GET['precio']){
	$precio =$_GET['precio'];
}

$sql= "SELECT name, description, price FROM plates WHERE price>'$precio';";

echo "<body>\n";
echo "<table class = contacto >\n";
echo "<tr>\n";
echo "<td>Plato</td>\n";
echo "<td>Descripción</td>\n";
echo "<td>Precio</td>\n";
echo "</tr>\n";


foreach($dbcon->query($sql) as $row)
{
  echo "<tr>\n";
  echo "<td>" .$row['name'] ."</td>\n";
  echo "<td>" .$row['description'] ."</td>\n";
  echo "<td>" .$row['price'] ."</td>\n";
  echo "</tr>\n";
}
$dbcon = null;

?>
