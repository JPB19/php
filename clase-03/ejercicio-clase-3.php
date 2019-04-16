<?php
for ($i=1; $i < 101; $i++) {

  echo $i;

  if (rand (0 , 100)) {
    break;
  }

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

$moneda = rand(0, 1);
$tirada = 0;

while ($tirada < 5) {

  if ($moneda == 1) {
    echo $moneda;

  $tirada ++;
  }

}

echo "<br><hr>";




 ?>
