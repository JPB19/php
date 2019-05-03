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
$casado= false;
$sexo= "masculino";


if($edad >= 18 && !$casado){

  echo "Bienvenido";
}
elseif ($sexo === "otro") {
    echo "Bienvenido";
}

else {
  echo "No sos Bienvenido";
}

echo "<br><hr>";

$cantidadDeAlumnos = 100;

if ($cantidadDeAlumnos) {
  echo "true";
}
else {
  echo "false";
}

echo "<br><hr>";

if ($i = 0) {
  echo "true";
}
else {
  echo "false";
}

echo "<br><hr>";

$numero = 32;


$paroimpar = ($numero % 2 == 0) ? "el numero es par" : "el numero es impar";

echo ($paroimpar);

echo "<br><hr>";

$nombre = "Jorge";

switch ($nombre) {
  case 'Pedro':
    echo "Hola_Pedro";
    break;
  case 'Juan':
    echo "Hola_Juan";
    break;
  case 'Leopoldo':
    echo "Hola_Leopoldo";
    break;
  case 'Mariano':
    echo "Hola_Mariano";
    break;
  case 'Florencia':
  echo "Hola_Florencia";
    break;

  default:
    echo "No hay a quien saludar";
    break;
}

echo "<br><hr>";

$colorRemera = "negro";

switch ($colorRemera) {
  case 'amarillo':

  case 'rojo':

  case 'verde':

  echo "es un color primario";

    break;

  default:
    echo "La remera es de un color desconocido";
    break;
}




?>
