<?php 

class BorrarC{


	public function BorrarEmpleadoC($id){
		$tabla="empleados";

		$borrar=BorrarM::BorrarEmpleadosM($tabla,$id);

		header("location:index.php?ruta=empleados");
	}
}

?>