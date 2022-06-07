<?php
  if ($_POST) {
    $valor_a = $_POST['valorA'];
    $valor_b = $_POST['valorB'];
    $suma = $valor_a + $valor_b;
    $resta = $valor_a - $valor_b;
    $multiplicacion = $valor_a * $valor_b;
    $division = $valor_a / $valor_b;
    
    echo $suma."<br/>";
    echo $resta."<br/>";
    echo $multiplicacion."<br/>";
    echo $division."<br/>";

  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/flex.css" />
    <title>PHP | Ejercicio 07</title>
  </head>
  <body>
    <form class="flex flex-column" action="ejercicio07.php" method="post">
      <div class="flex flex-row">
        <label>Valor a: <input type="number" name="valorA" required /></label>
      </div>
      <div class="flex flex-row">
        <label>Valor b: <input type="number" name="valorB" required /></label>
      </div>
      <div class="flex flex-row">
        <input type="submit" value="Calcular" />
      </div>
    </form>
  </body>
</html>
