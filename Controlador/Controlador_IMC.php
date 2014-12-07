<?php

class Controlador_IMC{
	private $cc = "";
	

	public function Ingreso( $cedula){
		$this-> cc = $cedula;
		
	}
	
	public function get_Documento(){
		return $this-> cc;	
	
	public function set_Documento($cedula){
		$this-> = $cedula;
	}

	
	
}

?>
