<?php
	include_once '../Modelo/modelo_Imc.php'; 
	include_once '../controlador/Controlador_IMC.php'; 

	$control = new Controlador_IMC();
	$modelo = new modelo_Imc($control);
	$imc = $modelo->Calcular_Imc($_REQUEST['talla'],$_REQUEST['peso']);
	echo $imc;
	header("Location: ../Vistas/Resultado.php?imc=$imc");

?>