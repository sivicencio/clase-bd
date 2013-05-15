<?php

$precio = 0;
if ($_GET['precio']){
  $precio =$_GET['precio'];
}

$dbcon = new PDO("pgsql:dbname=clases_bd;host=localhost","sivicencio","");
$sql= "SELECT name, description, price FROM plates WHERE price > '$precio';";
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
        <table class = contacto>
        <tr>
          <td>Plato</td>
          <td>Descripción</td>
          <td>Precio</td>
        </tr>
        <?php
        foreach($dbcon->query($sql) as $row) {
        ?>
          <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['price']?></td>
          </tr>
        <?php
        }
         $dbcon = null;
        ?>
        </table>
      </div>

      <div class="footer">
        <div class="footer-content">
          2013. Todos los derechos reservados
        </div>
      </div>
    </div>
  <body>
</html>