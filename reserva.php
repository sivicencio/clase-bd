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
        <form class='contacto' action ='solicitud.php' method= "post">
          <div><label>RUT:</label><input type='text' name = 'rut' value=''></div>
          <div><label>Mesa:</label><input type='text' name = 'tab'  value=''></div>
          <div><label>Fecha:</label><input type='text' name = 'fecha'  value=''></div>
          <div><input type='submit' value='Pedir Reserva'></div>
        </form>
      </div>

      <div class="footer">
        <div class="footer-content">
          2013. IIC2413. Todos los derechos reservados
        </div>
      </div>
    </div>
  <body>
</html>