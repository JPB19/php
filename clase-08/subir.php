<?php

  define('ALLOWED_IMAGE_FORMATS', ['jpg', 'jpeg', 'png', 'gif']);

echo "<pre>";
var_dump($_FILES);
echo "</pre>";
  function registerValidate(){

  $errors= [];
  $imagen= $_FILES["imagen"];


  if ($imagen["error"] != UPLOAD_ERR_OK) {
    $errors["imagen"] = "No subiste nada";
  }
  else {
    $ext = pathinfo($imagen["name"], PATHINFO_EXTENSION);

  if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
      $errors["imagen"] = "los formatos validos deben ser jpg , jpeg y png";
    }
  }
    return $errors;
  }






$errores = [];

if ($_POST) {
  $errores = registerValidate();
}



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ejercicios de subidas de archivos con $_files</title>
   </head>
   <body>

     <?php if ($errores): ?>
       <ul>
         <?php foreach ($errores as $error): ?>
           <li> <?php echo $error ?> </li>
         <?php endforeach; ?>
       </ul>
     <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
      <label for="imagen">subi una imagen:</label>
      <br>
      <input type="file" name="imagen" value="">
      <br><br>
      <button type="submit" name="submit">subir</button>

    </form>

   </body>
 </html>
