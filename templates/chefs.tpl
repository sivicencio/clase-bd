<html>
  <head>
    <title>Chefs</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/estilos.css"
  </head>

  <body>
    <table class ="contacto">
      <tr>
        <td>Chef</td>
        <td>Especialidad</td>
      </tr>
      {foreach $chefs as $chef}
        <tr>
          <td>{$chef.lname}</td>
          <td>{$chef.specialty}</td>
        </tr>
      {/foreach}
    </table>
  </body>
</html>