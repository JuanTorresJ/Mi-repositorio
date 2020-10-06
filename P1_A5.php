<a href="index.php">inicio</a><br>
<?php
//Triangulo
echo "<br><strong> Ejerciocio 1.-</strong></br>";

for ($i = 1; $i <= 5; $i++) 
{
    for ($k = 1; $k <= $i; $k++) 
    {
    echo $k;
    }
    echo"<br>";
}
echo "<br>";
//Triangulo al revez
echo "<br><strong> Ejerciocio 2.-</strong></br>";

for($i=1;$i<=7;$i++)
{
    for($j=1;$j<7-$i;$j++)
    {
        echo $j;
    }
    echo "<br>";
}


//calendario 
echo "<br><strong>Ejerciocio 3.-</strong></br>";

$meses = [ 
    1=>  "Enero" ,
    2=>  "Febrero" , 
    3=>  "Marzo" , 
    4=>  "Abril" , 
    5=>  "Mayo" , 
    6=>  "Junio" , 
    7=>  "Julio" , 
    8=>  "Agosto" , 
    9=>  "Septiembre" , 
    10=> "Octubre" , 
    11=> "Noviembre" , 
    12=> "Diciembre" ];

    function MesCon28() {for($M=1;$M<=28;$M++)echo $M;}
    function MesCon30() {for($M=1;$M<=30;$M++)echo $M;}
    function MesCon31() {for($M=1;$M<=31;$M++)echo $M;}
    for($i=1;$i<=12;$i++)
    { 
        switch($i)
        {
            case 1:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br> <hr>"; break;
            case 2:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon28(); echo "<br> <hr>"; break;
            case 3:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br> <hr>"; break;
            case 4:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br> <hr>"; break;
            case 5:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br> <hr>"; break;
            case 6:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br> <hr>"; break;
            case 7:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br> <hr>"; break;
            case 8:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br> <hr>"; break;
            case 9:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br> <hr>"; break;
            case 10: echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br> <hr>"; break;
            case 11: echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br> <hr>"; break;
            case 12: echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br> <hr>"; break;
        }
    }
   

//Piramide
echo "<br><strong>Ejerciocio 4.-</strong><br>";
for ($i = 1; $i <= 9; $i++) 
{
    
    for ($j = 9; $j>= $i; $j--) 
    {
        echo "*";
    }
    //--
    $k1 = "";
    for ($k = 1; $k <= $i; $k++) 
    {
        $k1 = $k1. "$k"; 
    }
    echo strrev($k1);
    for ($l = 2; $l<= $i;  $l++) 
    {
        echo $l;
    }
    //--
    for ($m = 9; $m>= $i; $m--) 
    {
        echo "*";
    }
    echo"<br>";
}


//Rombo 
echo "<br><strong>Ejerciocio 5.-</strong><br>";
//  
for ($i = 1; $i <= 9; $i++) 
{
    
    for ($R = 9; $R>= $i; $R--) 
    {
        echo "*";
    }

    $F = "";
    for ($k = 1; $k <= $i; $k++) 
    {
        $F = $F. "$k"; 
    }
    echo strrev($F);
    for ($l = 2; $l<= $i;  $l++) 
    {
        echo $l;
    }
    //--
    for ($m = 9; $m>= $i; $m--) 
    {
        echo "*";
    }
    echo"<br>";
}
 for ($i = 9; $i >= 1; $i--) 
{
    
    for ($R = 9; $R>= $i; $R--) 
    {
        echo "*";
    }
    $F = "";
    for ($k = 1; $k <= $i; $k++) 
    {
        $F = $F. "$k"; 
    }
    echo strrev($F);
    for ($l = 2; $l<= $i;  $l++) 
    {
        echo $l;
    }
    for ($m = 9; $m>= $i; $m--) 
    {
        echo "*";
    }
    echo"<br>";
}
?>
