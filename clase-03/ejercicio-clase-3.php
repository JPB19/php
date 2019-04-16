<?php

$numerorand = rand(0 , 100);

for ($i=1; $i < $numerorand; $i++) {

  echo $i . "<br>";


}



echo "<br><hr>";

for ($i= 1 ; $i < 11 ; $i++) {

  echo ($i * 2) . "<br>";
}

echo "<br><hr>";

$a = 100;
while ($a > 84) {
  echo $a . "<br>";
  $a --;

}

echo "<br><hr>";

$contador = 1;

while ($contador <= 5) {
  echo ($contador * 2) . "<br>";

  $contador ++;

}

echo "<br><hr>";

$cara= 0;
$tirada = 0;

while ($cara < 5) {

  $moneda = rand(0, 1);

  if ($moneda == 1) {
    echo $moneda;
    $cara++;
  }

  $tirada ++;

}
  echo "<br><hr>";
  echo "las tiradas fueron" . $tirada;


 ?>
