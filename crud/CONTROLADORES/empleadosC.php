<?php 

class EmpleadosC{

	public function RegistrarEmpleadosC(){

		if(isset($_POST['nombre'])){

			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$email=$_POST['email'];
			$puesto=$_POST['puesto'];
			$salario=$_POST['salario'];
			$tabla="empleados";

			$registracion=EmpleadosM::RegistrarEmpleadosM($tabla,$nombre,$apellido,$email,$puesto,$salario);

			if($registracion){
				header("location:index.php?ruta=empleados");
			}else{
				header("location:index.php?ruta=registrar");
			}
		}
	}


	
}