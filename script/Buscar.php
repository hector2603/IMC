<?php
	include_once '../modelos/Buscar_Registros.php';
	include_once '../controlador/Controlador_IMC.php'; 

	$id = $_REQUEST['user'];
	header("Location: ../Vistas/Registros.php?user=$id"); 

?>