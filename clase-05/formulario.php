<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
  </head>
  <body>
    <form action="imprimir.php" method="POST">
      <label for="nombre">Nombre</label>
      <br>
      <input type="text" name="nombre" id="nombre">

      <br>
      <label for="email">E-mail</label>
      <br>
      <input type="email" name="email" id="email">

      <br>

      <label for="sexo">sexo</label>

      <br>

      <input type="text" name="sexo" id="sexo">

      <br>

      <label for="hobbies">Que Hobbies tenes??</label>
      <br>
      <input type="checkbox" name="hobbies[]" value="b">Bicicleta
      <br>
      <input type="checkbox" name="hobbies[]" value="n">Natacion
      <br>
      <input type="checkbox" name="hobbies[]" value="p">Peliculas
      <br>
      <input type="checkbox" name="hobbies[]" value="f">Futbol
      <br>
      <input type="checkbox" name="hobbies[]" value="t">Tenis

      <br>

      <label for="estado-civil">Estado Civil</label>
      <br>
      <input type="radio" name="estado-civil" value="c">Casado
      <br>
      <input type="radio" name="estado-civil" value="s">Soltero
      <br>

      <label for="pais">En que pais naciste?</label>
      <br>
      <select class="" name="pais" id= "pais">

        <option value="ar">
          Argentina
        </option>

        <option value="col">
          Colombia
        </option>

        <option value="ven">
          Venezuela
        </option>

        <option value="Otr">
          Otra
        </option>
      </select>


      <button type="submit">Dale caña</button>
    </form>
  </body>
  </html>
