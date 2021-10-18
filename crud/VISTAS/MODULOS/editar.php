
	<br>
	<h1>EDITAR UN EMPLEADO</h1>

	<form method="post">
		
		<?php 

			if ($_REQUEST['id']) {
				$id=$_REQUEST['id'];
				$conn=new mysqli("localhost","root","0451yami","pruebitas");
				$getEmpleado=$conn->query("SELECT * FROM empleados WHERE id=$id")->fetch_assoc();
		?>
		<input type="text" placeholder="Nombre" name="nombre" value="<?php echo $getEmpleado['id']?>" disabled>

		<input type="text" placeholder="Nombre" name="nombre" value="<?php echo $getEmpleado['nombre']?>" required>

		<input type="text" placeholder="Apellido" name="apellido" value="<?php echo $getEmpleado['apellido']?>" required>

		<input type="email" placeholder="Email" name="email" value="<?php echo $getEmpleado['email']?>" required>

		<input type="text" placeholder="Puesto" name="puesto" value="<?php echo $getEmpleado['puesto']?>" required>

		<input type="text" placeholder="Salario" name="salario" value="<?php echo $getEmpleado['salario']?>" required>
		<?php 
			}else{
				header("location:index.php?ruta=empleados");
			} 
		?>

		<input type="submit" value="Actualizar">

	</form>

<?php 

$editar=new EditarC();
$editar -> EditarEmpleadosC($id);

?>