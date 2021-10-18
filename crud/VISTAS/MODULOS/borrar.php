<?php 

$id=$_REQUEST['id'];

$borrar=new BorrarC();
$borrar -> BorrarEmpleadoC($id);

?>