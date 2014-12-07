<?php
	include_once '../Modelo/Buscar_Registros.php';
	include_once '../Controlador/Controlador_IMC.php'; 

	$id = $_REQUEST['user'];
	$control = new Controlador_IMC();
	$control->set_Documento($_REQUEST['user']);
	$id_usu = $_REQUEST['user'];
	$guardar = new Buscar_Registros($control);
	$registros = $guardar->buscar_Registros($id_usu);

	$tabla = "";

	for($i = 0 ; $i<count($registros); $i++){
		$tabla .= "
				<tr>
					<td>".$registros[$i][1]."</td>
					<td>".$registros[$i][2]."</td>
					<td>".$registros[$i][3]."</td>
				</tr>";
	}
	echo $tabla;

?>