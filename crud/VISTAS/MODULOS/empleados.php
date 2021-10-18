<?php

session_start();

if(!$_SESSION['ingreso']=="ok"){
	header('location:index.php?ruta=ingresar');

	exit();
}

?>
	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Puesto</th>
				<th>Salario</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			<?php 
			$conn=new mysqli("localhost","root","0451yami","pruebitas");
			$get=$conn->query("SELECT * FROM empleados");
			
			while ($fila=$get->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $fila["nombre"]?></td>
					<td><?php echo $fila["apellido"]?></td>
					<td><?php echo $fila["email"]?></td>
					<td><?php echo $fila["puesto"]?></td>
					<td><?php echo $fila["salario"]?></td>
					<td><a href="index.php?ruta=editar&id=<?php echo $fila['id'] ?>">Editar</a></td>
					<td><a href="index.php?ruta=borrar&id=<?php echo $fila['id'] ?>">Borrar</a></td>
				</tr>
			<?php }?>
		</tbody>

	</table>
