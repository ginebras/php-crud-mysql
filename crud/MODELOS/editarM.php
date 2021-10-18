<?php 

class EditarM{


	static public function EditarEmpleadoM($tabla,$id,$nombre,$apellido,$email,$puesto,$salario){
		
		$conn=new mysqli("localhost","root","0451yami","pruebitas");
		$editar=$conn->query("UPDATE $tabla SET nombre='$nombre',apellido='$apellido',email='$email',puesto='$puesto',salario='$salario' WHERE id=$id");

		if($editar) return true;
		else return $editar;
	}
}

?>