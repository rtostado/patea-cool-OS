<?php

class Validar{
	
	public function ValidaCorreo($correo)
	{
		$ER = '/^[a-z|A-Z]([\w|.|-])*@([a-z|A-Z])+(.([a-z|A-Z]))+/';
		
		if(preg_match($ER, $correo)){
			return $correo;
		}
		else {
			die("Correo invalido...");	
		}	
	}
	
	public function ValidaID($ID)
	{
		$ER = '/([0-9])+/';
		
		if(preg_match($ER, $ID)){
			return $ID;
		}
		else {
			die("ID invalido...");
		}
	}
	
	public function ValidaTexto($texto)
	{
		$ER = '/(\w|\s|.|-|\d)+/';
		
		if (preg_match($ER, $texto)) {
			return $texto;
		} 
		else {
			die("texto invalido...");
		}
	}
	
	public function ValidaTelefono($telefono)
	{
		$ER = '/^([0-9]){2}(([-|-|\s])([0-9]){2,3}){2,4}/';
		
		if (preg_match($ER, $telefono)) {
			return $telefono;
		}
		else {
			die("telefono invalido...");
		}
	}
}

?>