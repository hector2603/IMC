<?php
class modelo_Imc{

	private $controlador = "";
	
	public function __construct($control){
		$this->controlador = $control;
	}
		
	
	public function Calcular_Imc($Estatura,$Peso){
		$peso = floatval ($Peso);
		$estatura = floatval ($Estatura);
		 return $peso/($estatura*$estatura);
	}


	public function Crear_Tabla($Imc){
		return 1;
	}
}	

?>