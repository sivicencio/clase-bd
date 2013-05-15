
<?php


$dbcon = new PDO("pgsql:dbname=clases_bd;host=localhost","sivicencio","");

$sql ="INSERT INTO reservations (rdate,client_rut,table_tnumber) VALUES ('$_POST[fecha]','$_POST[rut]','$_POST[tab]');";
try {
	if($dbcon->exec($sql)) {
	 $res = "Reserva exitosa";
	}
	else {
	 $res = "Reserva Fallida";
	}
}
catch(PDOException $e){
    	
}

if (!$_POST['rut'] ) {
   $res ="Falta RUT";
}
if (!$_POST['fecha']) {
    $res ="Falta fecha";
}
if (!$_POST['tab'] ) {
   $res ="Falta mesa";
}
$dbcon=null;
?>


<html>
  <head>
    <title>BD Restaurant</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/styles.css"
  </head>

  <body>
    <div id="container">
      <div class="header">
        <div class="header-content">
          <h1>
            <a href="/clase_bd">BD Restaurant</a>
          </h1>
          <ul>
            <li>
              <a href="platos.php">Platos</a>
            </li>
            <li>
              <a href="chefs.php">Chefs</a>
            </li>
            <li>
              <a href="reserva.php">Reserva</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="content">
        <form class='contacto'
          <div><label>Resultado Operacion: <?php echo $res;?></label></div>
        </form>
      </div>

      <div class="footer">
        <div class="footer-content">
          22013. IIC2413. Todos los derechos reservados
        </div>
      </div>
    </div>
  <body>
</html>

