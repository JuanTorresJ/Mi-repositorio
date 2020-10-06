
<a href="index.php">inicio</a>

<?php 

echo "<br><strong>Verificar declaracion</strong><br>";

if(1 === "1"){
echo "verdadero";

}

else{
	echo "falso";
}
echo "<br><strong>Valor directo</strong><br>";
//cualquier numero diferente de 0
//cualquier string no vacia
// valor true

$var = true;
if( $var ){
	echo "verdadero";
}else{
	echo "falso";
}

echo "<br><strong>swirch case</strong><br>";

$var1=1;
switch ($var1) {
    case "1":  echo "string<br>"  ; break;
    case true: echo "booleano<br>"; break;
    case 3.00: echo "decimal<br>" ; break;
    case 4:    echo "número<br>"  ; break;
    default:   echo "ninguno<br>" ; break;
}

$mes = 6;
switch ($mes) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}





?>