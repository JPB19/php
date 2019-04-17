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

  function tabla($base , $limite){
    $array=[];

  }

  function mayor($n1, $n2, $n3){
    global $numeroMagico;
  if ($n1 > $n2 && $n1 > $n3) {
    return $n1;
  }
  elseif ($n2 > $n1 && $n2 > $n3) {
    return $n2;
  }
  elseif ($n3 > $n1 && $n3 > $n2) {
    return $n3;
  }
  elseif (is_numeric($n3)) {
    return $numeroMagico > $n1 && $numeroMagico > $n2;
  }
  else {
    return "no hay mayor";
  }









?>
