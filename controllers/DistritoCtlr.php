<?php

class DistritoCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'modelo/DistritoMdl.php';
		require 'valida/Validar.php';
		
		$this->modelo = new DistritoMdl();
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
		$distritoId		= $this->valida->validaID($_POS['distritoId']);
		$distrito		= $this->valida->validaNombre($_POST['distrito']);
		
		$resultado	= $this->modelo->Insertar($distritoId,$distrito);
		
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