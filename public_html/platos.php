<?php
$dbcon = pg_connect("host=localhost dbname=grupo20 user=grupo20 password=MDA0MGQy");

$result = pg_query($dbcon, "SELECT name, description, price FROM plates;");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "Plato: $row[0]  Descripción: $row[1] Precio: $row[2]";
  echo "<br />\n";
}
 pg_close($dbcon);

?>
