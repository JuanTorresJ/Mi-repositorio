
<head>
	<link rel="stylesheet" type="text/css" href="Diseño/css.css">
</head>
<center>
<header class="hd">
<a href="peso.php">Peso</a>
	<a href="Distancia.php">Distancia</a>
	<a href="Volumen.php">Volumen</a><br><br>
	
</header>
<center>
	<div id="Contenido" class="Contenido">
<br>
<?php 
include("Controllers/PesoController.php");
$calculadora = new PesoController();
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
 <button name="accion" value="GK">GM->KL</button>
 <button name="accion" value="GO">GM->OZ</button>
 <button name="accion" value="KG">KL->GM</button>
 <button name="accion" value="KO">KL->OZ</button>
 <button name="accion" value="OK">OZ->KL</button>
 <button name="accion" value="OG">OZ->GM</button>



 </form>

 <form method="POST">
 	<button name="accion" value="reset">Reset</button>
 </form>
</div>
</center>