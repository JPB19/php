<?php
$funcionesEjecutadas = 0;
include "funciones.php";
include "superficie.php";

echo "<br><hr>";
function mayorsuperficiecirculo($radio1, $radio2 ,$radio3 ){

  return mayor(superficiedeuncirculo($radio1) . " Opcion A" , superficiedeuncirculo($radio2) . " Opcion B" , superficiedeuncirculo ($radio3). " Opcion C");

}

echo mayorsuperficiecirculo(25 , 50 ,30);

echo "<br><hr>";

$oracion= "Me encanta php .A mi tambien me encanta php!";
$posicion= strpos($oracion , "php");

echo "La palabra php en la oracion $oracion aparece por primera vez en $posicion"

 ?>
