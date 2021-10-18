<?php 

class EmpleadosM{

	static public function RegistrarEmpleadosM($tabla,$nombre,$apellido,$email,$puesto,$salario){

		$conn=new mysqli("localhost",'root','0451yami','pruebitas');
		$insert=$conn->query("INSERT INTO $tabla(nombre,apellido,email,puesto,salario) VALUES('$nombre','$apellido','$email','$puesto','$salario')");

		if($insert){
			return true;
		}else{
			return $insert;
		}
	}

	
}