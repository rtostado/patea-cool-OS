<?php

class ZonaCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'modelo/ZonaMdl.php';
		require 'valida/Validar.php';
		
		$this->modelo = new ZonaMdl();
		$this->valida = new Validar();
	}
	
	//se inicioa la ejecucion del
	function run(){
		switch ($_GET['act']) {
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
		$zonaId		= $this->valida->validaID($_POS['zonaId']);
		$zona		= $this->valida->validaNombre($_POST['zona']);
		
		$resultado	= $this->modelo->Insertar($zonaId,$zona);
		
		if($resultado){
			require 'vista/InsercionCorrecta.html';
		}
		else {
			require 'vista/Error.html';
		}
	}
	
	public function Eliminar()
	{
		
	}
	
	public function Modificar()
	{
		
	}
	
}

?>