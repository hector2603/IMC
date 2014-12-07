<?php
//include_once '../controladores/Controlador_IMC.php';
//include_once 'Modelo_IMC.php';

class Validar_Datos{


	private $numeros = array('0','1','2','3','4','5','6','7','8','9');
	private $letras = array(' ','a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z','á','é','í','ó','ú',
								'A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z','Á','É','Í','Ó','Ú',);



	public function validar_Cedula($cedula)
	{
		$c_Usuario = new Controlador_IMC($cedula);
		//$c_Usuario->Ingreso($cedula);
		$m_Usuario = new Modelo_IMC($c_Usuario);

		//$num_error = $m_Usuario-> /*clase que contiene el case*/();

		//header("Location: ../pages//*clase que contiene el case*/.$num_error);
	}

	public function Es_Numero($dato){
		$tam = strlen($dato);
		$salida1 = false;
		$salida2 = false;
		// El primer 'for' recorre todo el 'dato' (letra por letra)
		for ($i=0; $i < $tam; $i++) {
			$salida2 = false;
			// Segundo 'for' que recorre todo el arreglo de numeros y verifica
			// si coinciden, en caso de que no, salta fuera de los dos 'for's 
			// y devolverá un falso
			foreach ($this->numeros as $key) {
				if(substr($dato,$i,1) == $key){
					$salida2 = true;
					break;
				}
			}
			if(!$salida2)
				break;
		}

		if($salida2)
			$salida1 = true;

		return $salida1;


	}

	public function Es_Alfabetico($dato){
		$tam = strlen($dato);
		$salida1 = false;
		$salida2 = false;
		// El primer 'for' recorre todo el 'dato' (letra por letra)
		for ($i=0; $i < $tam; $i++) {
			$salida2 = false;
			// Segundo 'for' que recorre todo el arreglo de letras y verifica
			// si coinciden, en caso de que no, salta fuera de los dos 'for's 
			// y devolverá un falso
			foreach ($this->letras as $key) {
				if(substr($dato,$i,1) == $key){
					$salida2 = true;
					break;
				}
			}
			if(!$salida2)
				break;
		}

		if($salida2)
			$salida1 = true;

		return $salida1;
	}

	public function Es_Alfanumerico($dato){
		$tam = strlen($dato);
		$salida1 = false;
		$salida2 = false;
		$salida3 = false;
		// El primer 'for' recorre todo el 'dato' (letra por letra)
		for ($i=0; $i < $tam; $i++) {
			$salida2 = false;
			$salida3 = false;
			// Segundo 'for' que recorre todo el arreglo de letras Y de numeros, verificando
			// si coinciden, en caso de que no, salta fuera de los dos 'for's 
			// y devolverá un falso
			foreach ($this->letras as $key) {
				if(substr($dato,$i,1) == $key){
					$salida2 = true;
					break;
				}
			}
			foreach ($this->numeros as $key) {
				if(substr($dato,$i,1) == $key){
					$salida3 = true;
					break;
				}
			}
			// 'if' que pregunta si no ni letra ni numero, que termine el 'for' (el primer for)
			if(!$salida2 && !$salida3)
				break;
		}

		// 'if' que verifica que puede ser una letra (salida2) o un numero(salida3)
		if($salida2 || $salida3)
			$salida1 = true;

		return $salida1;
	}
	
}

?>