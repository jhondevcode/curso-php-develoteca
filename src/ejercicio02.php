<?php
  if ($_POST) {
    $nombre = $_POST["txtNombre"];
    echo "Hola ".$nombre;
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP | ejercicio02</title>
  </head>
  <body>
    <form action="ejercicio02.php" method="post">
      <label for="txtNombre">Nombre</label>
      <input type="text" name="txtNombre" id="txtNombre" required minlength="5"/>
      <br />
      <input type="submit" value="Enviar"/>
    </form>
  </body>
</html>
