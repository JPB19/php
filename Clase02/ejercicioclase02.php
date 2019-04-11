<?php

$variable1 = 25;
$variable2 = 63;

if ($variable1 > $variable2) {

  echo "El numero mayor es $variable1";
}
else {
  echo "El numero mayor es $variable2";
}

echo "<br><hr>";


$variablerand = rand(1, 5);

if ($variablerand == 3 || $variablerand == 5) {

  echo "$variablerand";

}

echo "<br><hr>";

if ($variablerand == 3) {
  echo $variablerand;
}

else {
  echo "el numero NO es 3";
}

echo "<br><hr>";

$numerodel1al100= rand(1, 100);

if ($numerodel1al100 > 50) {

  echo "el numero es mayor a 50";
}

else {
  echo "el numero es menor a 50";
}

echo "<br><hr>";

$nombredeusuario = "admin";
$clavedeusuario = "1234";

if ($nombredeusuario === "admin" && $clavedeusuario === "1234") {

  echo "bienvenido a tu cuenta!";

}
  elseif( $nombredeusuario!=="admin" && $clavedeusuario === "1234"){

  echo "problema de usuario";}


  elseif ($clavedeusuario !== "1234" && $nombredeusuario == "admin"){
  echo "problema de pass";
}

  else {
    echo "Lo sentimos error de credenciales";

  }



echo "<br><hr>";

$edad= 21;
$casado= "no";
$sexo= "dasd";








?>
