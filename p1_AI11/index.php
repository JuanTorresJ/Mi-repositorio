

<a href="../index.php"> regresar al inicio</a>
<br>
<?php 
include("Controllers/CalculadoraController.php");
$calculadora = new CalculadoraController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();

// obtener la entrada de la operacion
// ejecutar la operacion
// imprimir los resultados
 ?>
 <br>
 <form method="POST">
 	<label> <?php echo $calculadora->pantalla ?></label>
 <input type="hidden" name="pantalla" value=" <?php echo $calculadora->pantalla  ?>"> =
 	<label><?php echo $calculadora->resultado ?></label>
 <input type="hidden" name="resultado"  value="<?php echo $calculadora->resultado ?>"><br>
 <br>
 <input type="number" name="entrada" >
 <button name="accion" value="suma">+</button>
 <button name="accion" value="resta">-</button>
 <button name="accion" value="multiplica">*</button>
 <button name="accion" value="divide">/</button>


 </form>

 <form method="POST">
 	<button name="accion" value="reset">Reset</button>
 </form>

