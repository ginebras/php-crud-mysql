<?php

class BorrarM{

	static public function BorrarEmpleadosM($tabla,$id){
		$conn=new mysqli("localhost","root","0451yami","pruebitas");
		$borrar=$conn->query("DELETE FROM $tabla WHERE id=$id");

		return true;
	}
}

?>