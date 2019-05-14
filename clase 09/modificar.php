<?php
session_start();


if ( isset($_POST["Reiniciar"]) ) {
  $_SESSION["contador"] = 0;
}

if ( isset($_POST["Incremento"]) ) {
  if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
  }
  $_SESSION["contador"]++;
}

if (isset($_SESSION["contador"])) {
  echo $_SESSION["contador"];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>modificarphp</title>
  </head>
  <body>
    <form class="text" method="post">
      <button type="submit" name="Reiniciar">Reiniciar</button>
      <br>
      <button type="submit" name="Incremento">Incremento</button>
    </form>
  </body>
</html>
