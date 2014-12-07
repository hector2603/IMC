<?php
	include_once '../Modelo/Guardar_Registro.php'; 
	include_once '../controlador/Controlador_IMC.php'; 

	$control = new Controlador_IMC();
	$control->set_Documento($_REQUEST['id']);
	$id_usu = $_REQUEST['id'];
	$guardar = new Guardar_Registro($control);
	$imc = $guardar->crear_registro($_REQUEST['imc']);
	header("Location: ../Vistas/Mensaje.php?user=$id_usu");


?>