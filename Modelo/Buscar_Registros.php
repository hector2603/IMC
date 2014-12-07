<?php
include_once 'ModeloBd.php';
include_once 'Validar_Datos.php';
include_once 'modelo_Imc.php'; 


class Buscar_Registros extends modelo_Imc{
	private $bd;		// Tipo: BD
	private $registro;	// Tipo: Controlador_Factura
	
	public function __construct($control_IMC){
		$this->bd = new ModeloBD("indice","root");
		$this->bd->conectar();
		$this->registro = $control_IMC;
	}
	
	// Void: Buscar los datos de la registros
	public function buscar_Registros($id){
		$sql = "select * from registros WHERE cedula='$id'";
			$registros = $this->bd->consultar($sql);
			$ar="";
	    for($i = 0; $row = mysql_fetch_row($registros); $i++){

	        for($j = 0; $j < 4; $j++){
	            
	            $ar[$i][$j] = $row[$j];

	        }
	    }

	    return $ar;
	}

	public function desconectarBD(){
		$this->bd->desconectar();
	}

	public function mostrar_Todos(){

		$sql = "select * from registros";

		$registros = $this->bd->consultar($sql);

	    for($i = 0; $row = mysql_fetch_row($registros); $i++){

	        for($j = 0; $j < 16; $j++){
	            
	            $ar[$i][$j] = $row[$j];

	        }
	    }

	    return $ar;
	}

}

?>