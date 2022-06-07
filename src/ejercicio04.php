<?php
  if ($_POST) {
    $txt_nombre = $_POST['txtNombre'];
    $txt_apellido = $_POST['txtApellido'];
    echo "Hola ".$txt_nombre." ".$txt_apellido;
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP | Ejercicio 04</title>
  </head>
  <body>
    <form action="ejercicio04.php" method="post">
      <label for="txtNombre">Nombre:</label>
      <input type="text" name="txtNombre" id="txtNombre" />
      <br />
      <label for="txtApellido">Apellido:</label>
      <input type="text" name="txtApellido" id="txtApellido" />
      <br />
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
