<?php
$categorias_json= file_get_contents("categorias.json");

echo "<br><hr>";

echo $categorias_json;

echo "<br><hr>";

echo "<pre>";
$categoriasArray = json_decode($categorias_json , true);
echo "<pre>";
var_dump($categoriasArray);




 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>formulariojson</title>
   </head>
   <body>

     <form action="" method="post">

    <div class="form-control">
      <label for="categorias"></label>
      <input type="checkbox" name="" value="">

    </div>


     </form>

   </body>
 </html>
