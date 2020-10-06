
<head>
	<link rel="stylesheet" type="text/css" href="Diseño/css.css">
</head>
<center>
<header class="hd">
<a href="peso.php">Peso</a>
	<a href="Distancia.php">Distancia</a>
	<a href="Volumen.php">Volumen</a><br><br>
	
</header>
</center>
<center>
<div id="Contenido" class="Contenido">
	
<?php 
include("Controllers/DistanciaController.php");
$calculadora = new DistanciaController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();

// obtener la entrada de la operacion
// ejecutar la operacion
// imprimir los resultados
 ?>
 <br>
 <form method="POST">
 
 	<label><?php echo $calculadora->resultado ?></label>
 <input type="hidden" name="resultado"  value="<?php echo $calculadora->resultado ?>"><br>
 <br>
 <input type="number" name="entrada" >
 <br>
 <br>
 <button name="accion" value="CM">CM->M</button>
 <button name="accion" value="CP">CM->PU</button>
 <button name="accion" value="CY">CM->YA</button>
 <button name="accion" value="MC">M->CM</button>
 <button name="accion" value="MP">M->PU</button>
 <button name="accion" value="MY">M->YA</button>
 <button name="accion" value="PC">PU->CM</button>
 <button name="accion" value="PM">PU->M</button>
 <button name="accion" value="PY">PU->YA</button>
 <button name="accion" value="YM">YA->M</button>
 <button name="accion" value="YC">YA->CM</button>
 <button name="accion" value="YP">YA->PU</button>




 </form>

 <form method="POST">
 	<button name="accion" value="reset">Reset</button>
 </form>
</div>
</center>