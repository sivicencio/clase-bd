<?php
define('SMARTY_DIR','/Users/sivicencio/Documents/Server/clase_bd/includes/Smarty-3.1.13/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

$dbcon = new PDO("pgsql:dbname=clases_bd;host=localhost","sivicencio","");
$sql = "SELECT * FROM chefs;";
?>

<?php
$chefs = array();
foreach($dbcon->query($sql) as $row)
{
  $chefs[] = $row;
  // echo "<tr>\n";
  // echo "<td>" .$row['fname'] ."</td>\n";
  // echo "<td>" .$row['specialty'] ."</td>\n";
  // echo "</tr>\n";
}
$dbcon = null;
$smarty -> assign("chefs", $chefs);
$smarty -> display("chefs.tpl");
?>


