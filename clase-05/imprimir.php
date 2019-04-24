<?php


/*var_dump($_GET);

echo "<br><hr>";


echo "<br><br>";
echo $_GET["nombre"];
echo "<br><hr>";
echo $_GET["email"];
echo "<br><hr>";
echo $_GET["sexo"];

foreach ($_GET as $datosregisro => $valor) {
  echo "$datosregisro : $valor <br>";
}
*/

var_dump($_POST);

echo "<br><hr>";

echo $_POST["nombre"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
echo $_POST["sexo"];
echo "<br>";
echo "<pre>";
print_r($_POST["hobbies"]);
echo "</pre>";
echo "<br>";
echo $_POST["estado-civil"];
echo "<br>";
echo $_POST["pais"];

echo "<br><hr>";

/*foreach ($_POST as $datosregisro => $value) {
  echo "$datosregisro : $value <br>");
}*/

/*var_dump(getallheaders());

foreach (getallheaders() as $key => $value) {

  echo "$key : $value <br>";
}*/

//var_dump($_SERVER);
// var_dump($_FILES);
// var_dump($_REQUEST);
// var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump($GLOBALS);

 ?>
