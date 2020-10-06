
<head>
	<link rel="stylesheet" type="text/css" href="Diseño/css.css">
</head>
<body>
<center>
<header class="hd">
<a href="peso.php">Peso</a>
	<a href="Distancia.php">Distancia</a>
	<a href="Volumen.php">Volumen</a><br><br>
	
</header>
</center>
<center>
<div id="Contenido" class="Contenido">
<br>
<?php 
include("Controllers/VolumenController.php");
$calculadora = new VolumenController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();

 ?>
 
 
 <br>
 <form method="POST">
 
 	<label><?php echo $calculadora->resultado ?></label>
 <input type="hidden" name="resultado"  value="<?php echo $calculadora->resultado ?>"><br>
 <br>
 <input type="number" name="entrada" >
 <br>
 <br>
 <button name="accion" value="LM">Litros->Mililitros</button>
 <button name="accion" value="LC">Litros->Metro Cubico</button>
 <button name="accion" value="ML">Mililitros->Litros</button><br>
 <button name="accion" value="MC">Mililitros->Metro Cubico</button><br>
 <button name="accion" value="CL">Metro Cubico->Litros</button>
 <button name="accion" value="CM">Metro Cubico->Mililitros</button>




 </form>

 <form method="POST">
 	<button name="accion" value="reset">Reset</button>
 </form>

</div>
</center>
</body>