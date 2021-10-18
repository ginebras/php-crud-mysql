<?php 

class Modelo{

	static public function RutasModelo($ruta){

		if($ruta == "registrar" || $ruta=="ingresar" || $ruta=="salir" || $ruta=="empleados" || $ruta=="editar" || $ruta=="borrar"){
			$pagina="VISTAS/MODULOS/".$ruta.".php";
		}else if($ruta=="index"){
			$pagina="VISTAS/MODULOS/ingresar.php";
		}else{
			$pagina="VISTAS/MODULOS/ingresar.php";
		}

		return $pagina;
	}
}