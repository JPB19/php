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
          // 4          //8
  function tabla($base , $limite){
    $array=[];
    for ($i=$base; $i <= $limite; $i++) {
      array_push($array, $i);
    }
    return $array;

  }

  print_r (tabla(5 ,30));


  echo "<br><hr>";


  function mayor1($n1, $n2, $n3= null){

  global $numeroMagico;

  if ($n3 == null || !is_numeric($n3)) {
    $n3 = $numeroMagico;
  }
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
    return "no hay mayor";}

    echo "<br>";
  }

  var_dump(mayor1(3 , 2 ));

  echo "<br>";

  echo mayor1(3, 18 , "hola");

  echo "<br><hr>";



  function tabla1($base , $limite= null){
    global $numeroMagico;
    $array=[];
    if ($limite == null || !is_numeric($limite)) {
    $limite = $numeroMagico;
    }
    for ($i=$base; $i <= $limite; $i++) {
      array_push($array, $i);
    }
    return $array;

  }

  print_r(tabla1(2));











?>
