<?php

$variable01 = true;

$variable02 = false;

$variable03 = 0;

$variable04 = 1;

$variable05 = 6;

$variable06 = '';

$variable07 = "3";

$variable08 = "true";

$variable09 = 'false';

$variable10 = null;

function tipoDato($varN)
{
    if ( $varN == true )
    {
        echo 'el valor' . $varN . 'es verdadero.';
    }
    else
    {
        echo 'el valor' . $varN . 'es falso.';
    }
}

tipoDato($variable10);

echo "<hr>";

$animales = [ "perro" , "gato" , "loro" , "elefante" , "leon" ] ;

var_dump ($animales);

echo "<br><br>";

$animales[] = "serpiente";

$animales[] = "rinoceronte";

var_dump ($animales);

echo "<hr>";

echo "Me gustan los animales $animales[0] $animales[1] $animales[2] $animales[3] $animales[4] $animales[5] $animales[6]";

echo "<br><br>";

$animales[0] = "tortuga";

echo "<pre>";
 print_r($animales);
 echo "<pre>";

echo "<hr>";

 $animales[100] = "anguila";

 echo "<pre>";
 print_r($animales);
 echo "<pre>";

 echo "<pre>";
 print_r($animales[100]);
 echo "<pre>";

 echo "<br><br>";

 $animales[16] = "lagarto";

 echo "<pre>";
 print_r($animales);
 echo "<pre>";

 var_dump ($animales[16]);

 echo "<br><br><br>";

 $miauto= [
   "marca"=> "Ford",
   "modelo"=> "Falcon Sprint",
   "color"=> "negro",
   "año"=> 1974,
   "patente"=> "NOS777",

 ];

 var_dump($miauto);

 echo "<br><br>";

 echo "<pre>";
 print_r($miauto);
 echo "<pre>";

 $miauto[0]= "Leopoldo Jasinto Luque";

 echo "<br><br>";

 var_dump($miauto);

 echo "<br><br>";

 $miauto[14]= "Federacion Patronal";

 var_dump($miauto);

 echo "<br><br>";

 $miauto["poliza"]= 1245;

 var_dump($miauto);

echo "<br><br>";

$miauto ["patente"] = "NOS119";

var_dump($miauto);

echo "<br><br>";

$miauto[0] = "Martin Palermo";

var_dump($miauto);

echo "<pre>";
print_r($miauto);
echo "<pre>";

echo "<br><hr>";

$numeroentero = 259;
$numerodecimal = 98.36;

echo ($numeroentero + $numerodecimal);
echo "<br>";
echo ($numeroentero - $numerodecimal);
echo "<br>";
echo ($numeroentero / $numerodecimal);
echo "<br>";
echo ($numeroentero * $numerodecimal);

echo "<br><br>";

$numerodivision = ($numeroentero / $numerodecimal);

echo ($numerodivision);


$numeroentero = ($numeroentero + 1);
$numerodecimal = ($numerodecimal + 1);

echo "<br>";

echo ("$numeroentero" . " " . "$numerodecimal");

$numeroentero = ($numeroentero + 5);
$numerodecimal = ($numerodecimal + 0.6);

echo "<br><br>";

echo ("$numeroentero" . " " . "$numerodecimal");

$resultado = (($numeroentero * 2 + $numerodecimal) / ($numeroentero / 2) );

echo "<br><br>";

echo ($resultado);

echo "<br><br><hr>";

$hola = "hola";
$mundo = "mundo" ;

$holamundo = ($hola . " " . $mundo);

echo ($holamundo);

echo "<br><br>";

$quebuenophp = ($holamundo . " que bueno que esta php!");

echo ($quebuenophp);
















?>
