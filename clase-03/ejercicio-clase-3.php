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
    $tirada++;



}
  echo "<br><hr>";
  echo "las tiradas fueron" . $tirada;

echo "<br><hr>";

$cara1= 0;
$tirada1= 0;

do {
  $tirada1++;
  $moneda1 = rand(0, 1 );
  if ($moneda1 == 1) {
    $cara1++;
  }
} while ($cara1 < 1) ;

echo "las tiradas hasta obtener cara fueron $tirada1";

echo "<br><hr>";


$nombres= ["julian" , "martin" , "fede" , "mati" , "nico"];

for ($i=0; $i < count($nombres) ; $i++) {
  echo $nombres[$i] . "<br>";
}

echo "<br><hr>";

$nombres1= ["julian" , "martin" , "fede" , "mati" , "nico"];

$indiceArray= 0;

while ($indiceArray < count($nombres1) ) {

  echo $nombres1[$indiceArray]. "<br>";

  $indiceArray++;
}

echo "<br><hr>";

$nombres2= ["julian" , "martin" , "fede" , "mati" , "nico"];
$indiceArray2= 0;

do {

  echo $nombres2[$indiceArray2] . "<br>";
  $indiceArray2++;

} while ($indiceArray2 < count($nombres2));

echo "<br><hr>";


$personas = [
  "nombre1" => "julian",
  "nombre2" => "martin",
  "nombre3" => "fede",
  "nombre4" => "mati",
  "nombre5" => "nico",
];

foreach ($personas as $nombre_foreach => $valor) {

  echo "$nombre_foreach : $valor  <br>";
}

echo "<br><hr>";

$numeros = [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10];

for ($i=0; $i < count($numeros); $i++) {
  echo $numeros[$i] ."<br>";
  if ($numeros[$i] == 5) {
    echo "se encontro un numero 5 <br>";
    break;}
  }

echo "<br><hr>";

$numeros1= [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10];
$a=0;

while ($a < count($numeros1)) {

  echo $numeros[$a] . "<br>";
  if ($numeros[$a] == 5) {
    echo "se encontro un numero 5 <br>";
    break;}
  $a++;
}

echo "<br><hr>";

$numeros2= [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10];
$a=0;


do {
  echo $numeros2[$a] ."<br>";

  if ($numeros[$a] == 5) {
    echo "se encontro un numero 5 <br>";
    break;}

    $a++;
} while ($a < count($numeros2));


echo "<br><hr>";

$arrayLetras = range("a", "o");
$value = 0;
for ($i=0; $i < count($arrayLetras); $i++) {
  $value = $arrayLetras[$i];
  echo "En la posicion $i se encuentra el valor" ." " . $value . " " . "donde" ." " . $value . " " . "se reemplazara por cada valor del array y $i representa el indice";
}

echo "<br><hr>";


$mascota = [

  "animal" => "perro",
  "edad" => 6,
  "altura" => "30cm",
  "nombre" => "rocky",

];

foreach ($mascota as $datos => $valor) {
  echo "$datos : $valor <br>" ;
}

echo "<br><hr>";

$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
"Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;


foreach ($ceu as $pais => $capital) {
  echo "$pais : $capital <br>";
}
echo "<br><hr>";

$ceu1 = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu1 as $pais => $ciudades) {
echo "las ciudades de $pais son";
echo "<ul>";
foreach ($ciudades as $ciudad => $valor) {
  echo "<li> $valor</li>";
}
echo "</ul>";

}









echo "<br><hr>";


$paises = [
  "Argentina" => [
    "esAmericano" => true,
    "ciudades" => ["Buenos Aires", "Córdoba"]
  ],
  "Brasil" => [
    "esAmericano" => true,
    "ciudades" => ["Brasilia", "Rio de Janeiro"]
  ],
  "Francia" => [
    "esAmericano" => false,
    "ciudades" =>  ["Paris", "Nantes", "Lyon"]
  ],
  "Italia" => [
    "esAmericano" => false,
    "ciudades" =>  ["Roma", "Milan", "Venecia"]
  ],
  "Alemania" => [
    "esAmericano" => false,
    "ciudades" =>  ["Munich", "Berlin", "Frankfurt"]
  ],
  "Colombia" => [
    "esAmericano" => true,
    "ciudades" => ["Cartagena", "Bogota", "Barranquilla"]
  ],
];

foreach ($paises as $pais => $datos) {
  if ($datos["esAmericano"] === true) {
    echo "Las ciudades de $pais son: <br>";
      echo "<ul>";
      foreach ($datos["ciudades"] as $ciudad) {
        echo "<li> $ciudad </li>";
      }
      echo "</ul>";
    }

  }









 ?>
