<a href="index.php">Inicio</a> <br> <br>
 <?php

include('P1_A9_Controlador.php');

//echo var_dump($mUsuarios);

?>

<table border="1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Edad</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($mUsuarios as $rowUsuario) {
			echo "<tr>
					<td>$rowUsuario->id</td>
					<td>$rowUsuario->nombre</td>
					<td>$rowUsuario->edad</td>
					</tr>";
		}
		?>
	</tbody>

</table>