<?php

class AdminM{
	static public function Ingresar($tabla,$usuario,$clave){

		$conn=new mysqli("localhost",'root','0451yami','pruebitas');
		$insert=$conn->query("INSERT INTO $tabla(usuario,clave) VALUES('$usuario','$clave')");

		
		if($insert){
			$get=$conn->query("SELECT * FROM $tabla ORDER BY id DESC LIMIT 1");
			return $get->fetch_assoc();
		}else{
			return $insert;
		}
		
	}
}

?>