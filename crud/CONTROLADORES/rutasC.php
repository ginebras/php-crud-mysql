<?php 

class ControladorRutas{

	public function Plantilla(){

		include "VISTAS/plantilla.php";
	}

	public function Rutas(){
		if(isset($_GET['ruta']))
			$rutas=$_GET['ruta'];
		else
			$rutas='index';

		$respuesta=Modelo::RutasModelo($rutas);
		include $respuesta;
	}
}