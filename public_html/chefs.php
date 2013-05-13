<?php
header('Content-Type: text/html; charset=utf-8');
echo '<style type="text/css">';
include 'estilos.css';
echo '</style>';

$dbcon = new PDO("pgsql:dbname=grupo20;host=localhost","grupo20","MDA0MGQy");
$sql = "SELECT fname, specialty FROM chefs;";
echo "<body>\n";
echo "<table class = contacto>\n";
echo "<tr>\n";
echo "<td>Chef</td>\n";
echo "<td>Especialidad</td>\n";
echo "</tr>\n";

foreach($dbcon->query($sql) as $row)
{
  echo "<tr>\n";
  echo "<td>" .$row['fname'] ."</td>\n";
  echo "<td>" .$row['specialty'] ."</td>\n";
  echo "</tr>\n";
}
$dbcon = null;

echo "</table>";
echo "</body";


?>
