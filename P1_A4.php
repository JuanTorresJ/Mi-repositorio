<a href="index.php">inicio</a><br>
<?php 

echo "<strong>if</strong><br>";

for ($i = 0; $i <= 5; $i++){
	echo "$i <br>";
}


//-------------------------------------------------------------

echo "<strong>if inverso</strong><br>";

for ($i = 5; $i > 0; $i--){
	echo "$i <br>";}

//-------------------------------------------------------------

echo "<strong>while</strong><br>";

$ciclos = 0;
while($ciclos <=5){
	$ciclos++;
	echo "$ciclos <br>";
}

//-------------------------------------------------------------

echo "<strong>Do while</strong><br>";

$ciclos = 0;
do{
	$ciclos++;
	echo "$ciclos <br>";


}while($ciclos <3);

//-------------------------------------------------------------

echo "<strong>Arreglos</strong><br>";

$arrNuevo= [1,"a",3,3.455,true];
echo var_dump($arrNuevo);
echo "<br>";

//-------------------------------------------------------------

echo "<strong>Arreglos</strong><br>";

array_push($arrNuevo, "var1");
echo var_dump($arrNuevo);
echo "<br>";

//-------------------------------------------------------------

echo "<strong>Arreglos</strong><br>";

array_unshift($arrNuevo, "var2");
echo var_dump($arrNuevo);
echo "<br>";
	
//-------------------------------------------------------------

echo "<strong>Arreglos</strong><br>";
unset($arrNuevo[2]);
echo var_dump($arrNuevo);
echo "<br>";
	

//-------------------------------------------------------------

echo "<strong>Arreglos</strong><br>";
$nElementos= count($arrNuevo);
echo "nElementos <br>";
echo "<br>";

//-------------------------------------------------------------

echo "<strong>Arreglos ss</strong><br>";
$arr1 = [1,2,3];
$arr2 = [1,3,5,4];
$arrMerge= array_replace($arr1,$arr2);
echo var_dump($arrMerge);
echo "<br>";

//-------------------------------------------------------------

echo "<strong>Arreglos</strong><br>";
$arrMerge= array_reverse($arrMerge);
echo var_dump($arrMerge);
echo "<br>";

//-------------------------------------------------------------

echo "<strong>Ordenamiento descendiente</strong><br>";
rsort($arrMerge);
echo var_dump($arrMerge);
echo "<br>";

//-------------------------------------------------------------

echo "<strong>verificar si se encuentra un elemento</strong><br>";
if(in_array(2, $arrMerge)){
	echo "si se encontro <br>";

}else{
	echo " no se encontro <br>";
}

//-------------------------------------------------------------

//echo "<strong>foreach linean</strong><br>";
//$numeros = [1,2,3,"a", array(6,7,8),array(9,20)];
//foreach ($numeros as $item ) {
//	if (is array($item)){
//		foreach ($item as $subitem) {
//			echo "$subitem<br>";
			# code...
//		}
//		else{
//			echo "$item<br>";
//		}
//	}
	# code...

//-------------------------------------------------------------

echo "<strong>Arreglo asociativo</strong><br>";

$asociativo= ["edad" => 30, "nombre" => "eduardo", "tel" => "4777323232"];
echo $asociativo["edad"]. "<br>";
echo $asociativo["nombre"]. "<br>";
echo $asociativo["tel"]. "<br>";

foreach ($asociativo as $llave => $value) {
	echo "$llave - $value<br>";
	# code...
}
 ?>