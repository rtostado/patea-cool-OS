<?php

class ZonaCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'Modelo/ZonaMdl.php';
		require 'aplicacion/Validar.php';
		
		$this->modelo = new ZonaMdl();
		$this->valida = new Validar();
	}
	
	//se inicioa la ejecucion del
	function run(){
		switch ($_POST['act']) {
			case 'Insertar':
				$this->Insertar();				
				break;
			case 'Eliminar':
				$this->Eliminar();
				break;
			case 'Modificar':
				$this->Modificar();
				break;
			default:				
				break;
		}
	}
	
	private function Insertar()
	{
		$zonaId		= $this->valida->validaID($_POST['zonaId']);
		$zona		= $this->valida->validaNombre($_POST['zona']);
		
		$resultado	= $this->modelo->Insertar($zonaId,$zona);
		
		if($resultado){
			require 'Vista/InsercionCorrecta.html';
		}
		else {
			require 'Vista/Error.html';
		}
	}
	
	public function Eliminar()
	{
		$zonaId		= $this->valida->validaID($_POST['zonaId']);
		$resultado 	= $this->modelo->Eliminar($zonaId);
	}
	
	public function Modificar()
	{
		
	}
	
}

?>