<a href="index.php">inicio</a><br>
<?php 
function imprimirSalto(){
echo "<br><strong>impreso desde la funcion</strong><br>";

}
imprimirSalto();
//------------------------------------------------------------------------------
function titulo($titulo){
echo "<br>$titulo<br>";

}
$mitituloEs ="impreso pasando parametro";
titulo($mitituloEs);

//------------------------------------------------------------------------------


function getTitulo($titulo){
return "<br>$titulo<br>";

}
$tituloRegresado = getTitulo("impreso retornando un valor");
echo $tituloRegresado;






//------------------------------------------------------------------------------


function getTituloImprimiendo($titulo){
return "<br>$titulo<br>";
echo "<br><strong>impreso desde la funcion</strong><br>";

}
$tituloRegresado = getTituloImprimiendo("impreso retornando un valor");
echo $tituloRegresado;







//------------------------------------------------------------------------------


function tituloDefault($titulo = "Titulo por defecto"){
	echo "<br>$titulo<br>";
}
tituloDefault();

//------------------------------------------------------------------------------

$numero =1;

function sumaUno($numero){
	$numero++;
	echo "<br>$numero<br>";

}
sumaUno($numero);


//------------------------------------------------------------------------------

$numero =1;

function sumaUnoEjercicio(&$numero){
	$numero= $numero +1;

}
sumaUnoEjercicio($numero);
echo $numero;



 ?>