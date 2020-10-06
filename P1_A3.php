<a href="index.php">inicio</a><br>
<?php 

//fecha hoy
$dia = 8;
$mes = 9;
$año = 2020;


//fecha nac
$fNaD = 7;
$fNaM = 2;
$fNaA = 2019;

if($fNaA >= $año){
echo "edad incorecta";	
}


if (($fNaM == $mes) && ($fNaD >= $dia)) {
$año=($año-1); 

}

if ($fNaM > $mes) {
$año=($año-1);
}




$edad=($año-$fNaA);
echo "Naciste el ". $dia . " de ". $mes. " del ". $año;
echo "<br><br>  Tienes ". $edad . " Años";

// desarrollar el codigo con ifs
// año de hoy menos año de nacimiento
// que se desea obtener -> la edad
// lo que determina si se resta o no un año es
// si ya paso o llego la fecha de nacimiento

// 1- la fecha ya oaso o es el dia de hoy 
// 2- la fehca no ha pasado (aun no cumple años)


// si el mes es mayor -> ya paso la fecha
// cuando es el mismo mes y el dia es mayor o igual
// si el mes actual es menor -> no ha cumplido



 ?>