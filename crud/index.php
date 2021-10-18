<?php 

require_once "MODELOS/rutasM.php";
require_once "MODELOS/adminM.php";
require_once "MODELOS/empleadosM.php";
require_once "MODELOS/editarM.php";
require_once "MODELOS/borrarM.php";

require_once "CONTROLADORES/adminC.php";
require_once "CONTROLADORES/rutasC.php";
require_once "CONTROLADORES/empleadosC.php";
require_once "CONTROLADORES/editarC.php";
require_once "CONTROLADORES/borrarC.php";

$rutasC=new ControladorRutas();
$rutasC -> Plantilla();

?>