<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    /*if ($_GET) {
      header('location : clase-06-register.php');
    }*/


    $nombre= $_POST["name"];
    $pais = $_POST["pais-de-nacimiento"];
    $email= $_POST["email"];
    if (isset($_POST["pasatiempos"])) {
      $pasatiempos= $_POST["pasatiempos"];
    }


    ?>


    <p><strong> Muchas Gracias por registrate <?=  $nombre ?>, nos has dicho
    que tu pais de nacimiento es <?=$pais ?>. Hemos registrado tu email: <?= $email ?>
    </p>

    <p>Tus pasatiempos son:</p>

    <?php if(isset($pasatiempos)):?>

    <?= implode(" ," ,$pasatiempos)?>

    <?php  else :?>

    <p>"no has especificado tus pasatiempos"</p>

    <?php endif ;?>

    <p>GRACIAS!</p>



    <p>Gracias por Registrate </p>



    <?php

    /*$nombre= $_GET["name"];
    $pais = $_GET["pais-de-nacimiento"];
    $email= $_GET["email"];
    if (isset($_GET["pasatiempos"])) {
      $pasatiempos= $_GET["pasatiempos"];
    }


    ?>


    <p><strong> Muchasssss Gracias por registrate <?=  $nombre ?>, nos has dicho
    que tu pais de nacimiento es <?=$pais ?>. Hemos registrado tu email: <?= $email ?>
    </p>

    <p>Tus pasatiempos son:</p>

    <?php if(isset($pasatiempos)):?>

    <?= implode(" ," ,$pasatiempos)?>

    <?php  else :?>

    <p>"no has especificado tus pasatiempos"</p>

    <?php endif ;?>

    <p>GRACIAS!</p>


    <p>Gracias por Registrate </p>

  </body>
</html>
