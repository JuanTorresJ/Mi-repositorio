
<?php

include('P1_A8_Modelo.php');
include('P1_A8_funccions.php');

titulo("Creación de objetos persona");

$mPersona = new Persona();

$mPersona->nombre = "Eduardo";
$mPersona->edad = 30;
echo var_dump($mPersona) . "<br>";

$mPersona2 = new Persona();

$mPersona2->nombre = "Juan";
$mPersona2->edad = 22;    
echo var_dump($mPersona2) . "<br>";


titulo("Imprimir los Valores");

echo "$mPersona->nombre tiene $mPersona->edad años<br>";
echo "$mPersona2->nombre tiene $mPersona2->edad años<br>";

titulo("Imprimir desde la función");

$mPersona->saluda();
$mPersona2->saluda();

titulo("Imprimir pasando los parámetros");

$mPersona->saluda();
$mPersona2->respondeSaludo($mPersona->nombre);

titulo("Retornar los valores");

$edadPersona1 = $mPersona->getEdad();
echo "$edadPersona1 años <br>";

titulo("Asignar un valor");

$mPersona->setEdad(22);
$edadPersona1 = $mPersona->getEdad();
echo "$edadPersona1 años <br>";
echo "<br>"

?>
<a href = "index.php">Regresar</a><br> <br>