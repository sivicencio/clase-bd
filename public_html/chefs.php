<?php
$dbcon = pg_connect("host=localhost dbname=grupo20 user=grupo20 password=MDA0MGQy");

$result = pg_query($dbcon, "SELECT fname, specialty FROM chefs;");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "Chef: $row[0]  Especialidad: $row[1]";
  echo "<br />\n";
}


?>
