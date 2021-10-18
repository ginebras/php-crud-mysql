<?php 

class AdminC{


	public function Ingreso(){

		if(isset($_POST['usuario'])){

			$usuario=$_POST['usuario'];
			$clave=$_POST['clave'];
			$tabla='administradores';
			$respuesta=AdminM::Ingresar($tabla,$usuario,$clave);
			
			if($respuesta['usuario']==$_POST['usuario'] && $respuesta['clave']==$_POST['clave']){

				session_start();

				$_SESSION['ingreso']="ok";

				header('location:index.php?ruta=empleados');
			}else{

				echo "ERROR AL INGRESAR";
			}
		}
	}
}