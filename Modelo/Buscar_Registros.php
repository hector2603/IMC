<?php
include_once 'ModeloBd.php';
include_once 'Validacion_Datos.php';

class Modelo_Registros{
	private $bd;		// Tipo: BD
	private $registro;	// Tipo: Controlador_Factura
	
	public function __construct($control_IMC){
		$this->bd = new BD("indice1","root");
		$this->bd->conectar();
		$this->registro = $control_IMC;
	}
	
	// Void: Buscar los datos de la registros
	public function buscar_Registros($id){
		$sql = "";
		$registros = $this->bd->consultar($sql);
		if($reg=mysql_fetch_array($registros)){
		}
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

	public function getControladorFactura(){
		return $this->registro;
	}

	public function getNumeroFacturas(){
		$sql = "SELECT `Idfactura` FROM `factura`";
		$row = mysql_fetch_array($this->bd->consultar($sql));
		return $row[0];

	}

	public function getNumeroFacturas(){
		$sql = "SELECT `cedula`, `fecha`, `imc` FROM `registros` WHERE `cedula`=".$this->registros->get_cedula().;
		$row = mysql_fetch_array($this->bd->consultar($sql));
		return $row[0];

	}

	public function infoFacturas(){ // funcion para retornar la informacion de todas las facturas, es usada en la vista visualizar facturas 
		$sql = "SELECT 
		`cedula`, `fecha`,`imc`
		FROM
		 `registros WHERE `cedula`= usuarios.Documento  ORDER BY Idfactura fecha";
		 $registros = $this->bd->consultar($sql);

		for($i = 0; $row = mysql_fetch_row($registros); $i++){
	        for($j = 0; $j < 8; $j++){
	            $ar[$i][$j] = $row[$j];
	        }
	    }
	    return $ar;
	}


}

?>