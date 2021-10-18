<?php 

class EditarC{

	public function EditarEmpleadosC($id){
		
		if(isset($_POST['nombre'])){
			$tabla="empleados";
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$email=$_POST['email'];
			$puesto=$_POST['puesto'];
			$salario=$_POST['salario'];

			$editar=EditarM::EditarEmpleadoM($tabla,$id,$nombre,$apellido,$email,$puesto,$salario);

			if($editar){
				header("location:index.php?ruta=empleados");
			}else{
				echo "<script>alert('No se pudo actualizar el empleado')</script>";
			}
		}
	}

} 

?>