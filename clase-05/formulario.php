<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
    <style media="screen">
      input {
        display: block;
        width: 250px;
        border: none;
        border-bottom: solid 1px red;
      }
    </style>
  </head>
  <body>
    <form action="imprimir.php" method="get">

      <input type="text" name="nombre" id="nombre">
        <label for="nombre">Nombre</label>
      <br>

      <input type="email" name="email" id="email">
      <label for="email">E-mail</label>
      <br>
      <button type="submit">Dale caña</button>
    </form>
  </body>
  </html>
