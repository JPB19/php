<?php


  if (isset($_FILES["imagen"])) {

  if ($_FILES["imagen"]["error"] !== 0) {
    echo "hubo un error de carga <br>";
  }

  else {
    $ext = pathinfo($_FILES["imagen"]["name"] , PATHINFO_EXTENSION);

    if ($ext !="jpg" && $ext != "jpeg" && $ext != "png") {

      echo "La imagen debe ser formato jpg , jpeg o png <br>";
    }

    
  }
}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ejercicios de subidas de archivos con $_files</title>
   </head>
   <body>

     <form action="subir.php" method="post" enctype="multipart/form-data">
      <div class="">
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" value="">
      </div>

       <button type="submit" name="subir">Subir imagen</button>
     </form>

   </body>
 </html>
