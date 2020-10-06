
<?php include('layout/header.php'); ?>

<h1>Pagina 2</h1>

<?php
if(isset($_POST["miVariable"])){
	$miVariable= $_POST["miVariable"];
	$miVariable = $miVariable + 10;

}else{

  $miVariable=0;
}
?>


<form  method="POST">
	<input  type="number" value="<?php echo $miVariable; ?>" 
	name="miVariable" placeholder="Numero"><br>
	
	<button >sumar</button>

</form>

<?php include('layout/footer.php'); ?>