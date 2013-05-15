<html>
  <head>
    <title>{block name="title"}{/block}</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/styles.css" />
    <meta charset="utf-8">
  </head>

  <body>
    <div id="container">
      <div class="header">
        <div class="header-content">
          <h1>
            <a href="/clase_bd">{$app_name}</a>
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
        {block name="content"}{/block}
      </div>

      <div class="footer">
        <div class="footer-content">
          2013. IIC2413. Todos los derechos reservados
        </div>
      </div>
    </div>
  <body>
</html>