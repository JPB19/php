<?php
function superficietriangulo($base , $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * ($altura / 2) . " metros cuadrados";

}

echo superficietriangulo(10 , 5);
echo "<hr>";
echo $funcionesEjecutadas. " funciones ejecuadas";

echo "<br><hr>";

function superficiedeunrectangulo($base , $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * $altura . " metros cuadrados";
}

echo superficiedeunrectangulo(40 , 20);
echo "<hr>";
echo $funcionesEjecutadas. " funciones ejecuadas";
echo "<br><hr>";

function superficiedeuncuadrado($base){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * $base . " metros cuadrados";

}

echo superficiedeuncuadrado(4);
echo "<hr>";
echo $funcionesEjecutadas. " funciones ejecuadas";
echo "<br><hr>";


function superficiedeuncirculo($radio){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return pi() * $radio * $radio . " metros cuadrados";

}

echo superficiedeuncirculo(15);
echo "<hr>";
echo $funcionesEjecutadas. " funciones ejecuadas";
echo "<br><hr>";


 ?>
