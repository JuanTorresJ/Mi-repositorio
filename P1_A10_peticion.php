
<?php

$metodo=$_SERVER["REQUEST_METHOD"];

if($metodo!="POST"){
	http_response_code(405);
	die("Method Not Allowed");
}

if(isset($_GET["nombre"])){
	$nombreRecibido= $_GET["nombre"];
}

if(isset($_POST["nombre"])){
	echo var_dump($_POST)["nombre"];
}

if(isset($_POST["sumar"])){
	echo var_dump($_POST["sumar"]. "se preciono el boton sumar");
}
if(isset($_POST["restar"])){
	echo var_dump($_POST["restar"]. "se preciono el boton restar");
}




 ?>
