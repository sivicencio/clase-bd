
<?php

if (!$_POST['rut'] ) {
    die("Falta RUT");
}
if (!$_POST['fecha']) {
    die("Falta fecha");
}
if (!$_POST['tab'] ) {
    die("Falta mesa");
}


$dbcon = pg_connect("host=localhost dbname=grupo20 user=grupo20 password=MDA0MGQy");
if (!$dbcon) {
    die("No pudo abrise base de datos");
}
echo "Datos: 
";


$res=pg_query($dbcon, "INSERT INTO reservations (fecha,client_rut,table_tnumber) VALUES ('$_POST[fecha]','$_POST[rut]','$_POST[tab]');"); 


if (!$res) { 
    echo pg_last_error($dbcon); 
} else { 
    echo( "Reserva exitosa"); 
} 

pg_close($dbcon);
?>
