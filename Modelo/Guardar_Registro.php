<?php
include_once 'modelo_Imc.php'; 
include_once 'ModeloBd.php';
include_once 'Validar_Datos.php';

class Guardar_Registro extends modelo_Imc{
	private $bd;		// Tipo: BD
	private $registro;	// Tipo: Controlador_registro
	
	public function __construct($control_IMC){
		$this->bd = new ModeloBD("indice","root");
		$this->bd->conectar();
		$this->registro = $control_IMC;
	}
	
	public function crear_registro($imc){
		$fecha =date("Y")."-".date("m")."-".date("d");
		$sql = "INSERT INTO `registros` (`cedula`, `fecha`,`imc`) 
			  VALUES (	'".$this->registro->get_Documento()."',
						'".$fecha."',
						'".$imc."');";

		if($this->bd->insertar($sql))
			$salida = true;
		else $salida = 14;

		return $salida;
	}



	public function desconectarBD(){
		$this->bd->desconectar();
	}

	public function mostrar_Todos(){

		$sql = "select * from clientes";
		$registros = $this->bd->consultar($sql);
		$ar;

	    for($i = 0; $row = mysql_fetch_row($registros); $i++){

	        for($j = 0; $j < 6; $j++){
	            
	            $ar[$i][$j] = $row[$j];

	        }
	    }

	    return $ar;
	}

	
}

?>