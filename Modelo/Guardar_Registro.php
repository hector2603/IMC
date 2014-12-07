<?php
include_once 'ModeloBd.php';
include_once 'ValidacionDatos.php';

class Modelo_Cliente{
	private $bd;		// Tipo: BD
	private $cliente;	// Tipo: Controlador_Cliente
	
	public function __construct($control_Cliente){
		$this->bd = new BD("indice","root");
		$this->bd->conectar();
		$this->cliente = $control_Cliente;
	}
		

	
	public function crear_registro(){

		$sql = "INSERT INTO `registros` (`id`, `cedula`, `fecha`,`imc`) 
			  VALUES ('".$this->cliente->get_Documento()."',
				'".$this->registros->get_id()."',
				'".$this->registros->get_cedula()."',
				'".$this->registros->get_fecha()."',
				'".$this->registros->get_imc()."');";

		$salida = 0;
		$valida = new Validacion_Datos(); // <- Para validar los tipos de datos
		// Validacion de los minimos
		if(!(strlen($this->registros->get_id()) >= 4))		$salida = 5;
		elseif(!(strlen($this->registros->get_cedula()) >= 6))	$salida = 3;
		elseif(!(strlen($this->registros->get_imc()) >= 2))	$salida = 7;
		// Validacion de los tipos de datos (Numérico,Alfabético,Alfanumérico)
		elseif(!($valida->is_Number($this->registros->get_id())))			$salida = 8;
		elseif(!($valida->is_Number($this->registros->get_cedula())))		$salida = 9;
		elseif(!($valida->is_Alphabetic($this->registros->get_imc())))		$salida = 10;
		


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