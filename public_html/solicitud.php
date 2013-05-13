
<?php

header('Content-Type: text/html; charset=utf-8');
echo '<style type="text/css">';
include 'estilos.css';
echo '</style>';




$dbcon = new PDO("pgsql:dbname=grupo20;host=localhost","grupo20","MDA0MGQy");

$sql ="INSERT INTO reservations (fecha,client_rut,table_tnumber) VALUES ('$_POST[fecha]','$_POST[rut]','$_POST[tab]');"; 
//$res ="";
try{
	if($dbcon->exec($sql)){
	$res= "Reserva exitosa";
	}
	else
	{
	$res= "Reserva Fallida";
	}
}
catch(PDOException $e){
    	
}
if (!$_POST['rut'] ) {
   $res="Falta RUT";
}
if (!$_POST['fecha']) {
    $res="Falta fecha";
}
if (!$_POST['tab'] ) {
   $res="Falta mesa";
}
echo "<form class='contacto'\n";
echo "            <div><label>Resultado Operacion: $res</label></div>\n";
echo "        </form>\n";


$dbcon=null;
?>
