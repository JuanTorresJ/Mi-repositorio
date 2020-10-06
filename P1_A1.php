<a href="index.php">inicio</a> </br>;



<?php 

echo "<br><strong>imprecion desde php</strong><br>";
$variable = 1;

$variable = "hola";
$variable = 123.4;

echo $variable . "</br>";


echo "<br><strong>Operaciones Aritmeticas</strong><br>";

echo 1+1 . "</br>";
echo 3-1 . "</br>";
echo 2+4 . "</br>";
echo 10%7 . "</br>";

echo "<br><strong>imprecion desde comillas</strong><br>";

$variable = "hola como estas";
echo "$variable <br> ";


echo "<br><validacion</strong><br>";
if(is_bool(1)){
	echo "es boleano <br>";
}
else{
	echo "no es boleano";
}

if(is_null($variable)){
	echo "es nulo <br>";

}
else{
	echo "no es nulo";
}

echo "<br><strong>Verificar declaracion</strong><br>";


if(isset($variable2)){
	echo "si esta declarada";
}
else{
	echo "no esta definida";
}

$variable2 = "mi variable";

echo var_dump($variable2);

 ?>