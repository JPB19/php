<?php
  $numeroMagico= 19;

  function mayor($n1, $n2, $n3){
  if ($n1 > $n2 && $n1 > $n3) {
    return $n1;
  }
  elseif ($n2 > $n1 && $n2 > $n3) {
    return $n2;
  }
  elseif ($n3 > $n1 && $n3 > $n2) {
    return $n3;
  }
  else {
    return "no hay mayor";
  }
  }

  echo mayor(6,5,2);
  echo "<br><hr>";
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  echo $funcionesEjecutadas . " funciones ejecuadas";
  echo "<br><hr>";

  function tabla($base , $limite){
    $array=[];
    for ($i=$base; $limite < count($array); $i++) {

    

    }

  }









?>
