
<?php include('layout/header.php'); ?>
<a href="P1_A10_2.php"> ingresar a la pagina 2</a>

<h1>Pagina 1</h1>


<br><br>

<form action="P1_A10_peticion.php" method="POST">
	<input id="nombre" type="text" name="nombre" placeholder="Nombre"><br>
	<button>Enviar</button>
	<button name="sumar">sumar</button>
	<button name="restar">restar</button>
</form>

<!-- <button onclick="saludar()"> Mostrar hola</button> -->

<?php include('layout/footer.php'); ?>