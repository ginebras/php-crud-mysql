

	<br>
	<h1>REGISTRAR UN EMPLEADO</h1>

	<form method="post">
		
		<input type="text" placeholder="Nombre" name="nombre" required>

		<input type="text" placeholder="Apellido" name="apellido" required>

		<input type="email" placeholder="Email" name="email" required>

		<input type="text" placeholder="Puesto" name="puesto" required>

		<input type="text" placeholder="Salario" name="salario" required>

		<input type="submit" value="Registrar">

	</form>

<?php 

$registrar=new EmpleadosC();
$registrar -> RegistrarEmpleadosC();
