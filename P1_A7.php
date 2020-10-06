<a href = "index.php">Inicio</a><br> <br>

<?php

include('P1_A7_Funciones.php');

imprimirSalto();

salto();

$mitituloEs = "Impreso pasando parámetro";
Titulo($mitituloEs);
salto();

$tituloRegresado = getTitulo("Impreso retornando un valor");
echo $tituloRegresado;
salto();


$tituloRegresado = getTituloImprimiendo("Impreso retornando un valor");
echo $tituloRegresado;
salto();


tituloDefault();
salto();

$numero = 1;


sumaUno($numero);
echo $numero . ' Impreso externamente <br>';

sumaUnoPorReferencia($numero);
echo $numero . " impreso externamente<br>";

$numero = 1;

sumaUnoEjercicio($numero);
echo "$numero<br>";









?>

 <br>
<a href = "index.php">Regresar</a><br> <br>