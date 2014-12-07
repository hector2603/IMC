<?php
include_once 'ModeloBd.php';
include_once 'Validacion_Datos.php';

class Guardar_Registro{
	private $bd;		// Tipo: BD
	private $registro;	// Tipo: Controlador_registro
	
	public function __construct($control_IMC){
		$this->bd = new ModeloBD("indice","root");
		$this->bd->conectar();
		$this->registro = $control_IMC;
	}
	
	public function crear_registro(){

		$sql = "INSERT INTO `registros` (`id`, `cedula`, `fecha`,`imc`) 
			  VALUES ('".$this->registros->get_id()."',
				'".$this->registros->get_cedula()."',
				'".$this->registros->get_fecha()."',
				'".$this->registros->get_imc()."');";

		$salida = 0;
		$valida = new Validacion_Datos(); // <- Para validar los tipos de datos
		// Validacion de los minimos
		if(!(strlen($this->registros->get_cedula()) >= 6))		$salida = 5;
		// Validacion de los tipos de datos (Numérico,Alfabético,Alfanumérico)
		elseif(!($valida->is_Number($this->registros->get_cedula())))		$salida = 9;
		
		


		///////////////////////////////////////////////////////////////////////////

		elseif($this->bd->insertar($sql))
			$salida = true;
		else $salida = 14;
		//INSERT INTO `clientes` (`Documento`, `Nombres`, `Apellidos`,`Direccion`, `Telefono`, `Correo_Electronico`)  VALUES (123456789, hector, ocampo, carrer, 3124567899, hector@hotmail.com);

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