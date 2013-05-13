<html><?php
header('Content-Type: text/html; charset=utf-8');
echo '<style type="text/css">';
include 'estilos.css';
echo '</style>';

$dbcon = new PDO("pgsql:dbname=grupo20;host=localhost","grupo20","MDA0MGQy");
$sql = "SELECT fname, specialty FROM chefs;";
?>

<body>
<table class = contacto>
<tr>
<td>Chef</td>
<td>Especialidad</td>
</tr>

<?php
foreach($dbcon->query($sql) as $row)
{
  echo "<tr>\n";
  echo "<td>" .$row['fname'] ."</td>\n";
  echo "<td>" .$row['specialty'] ."</td>\n";
  echo "</tr>\n";
}
 $dbcon = null;
?>
</table>
</body>




