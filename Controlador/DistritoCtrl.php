<?php

class DistritoCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'Modelo/DistritoMdl.php';
		require 'aplicacion/Validar.php';
		
		$this->modelo = new DistritoMdl();
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
		$distritoId		= $this->valida->validaID($_POST['distritoId']);
		$distrito		= $this->valida->validaID($_POST['distrito']);
		
		$resultado	= $this->modelo->Insertar($distritoId,$distrito);
		
		if($resultado){
			require 'Vista/InsercionCorrecta.php';
		}
		else {
			require 'Vista/Error.php';
		}
	}
	
	public function Eliminar()
	{
		$distritoId	= $this->valida->validaID($_POST['distritoId']);
		$resultado 	= $this->modelo->Eliminar($distritoId);
	}
	
	public function Modificar()
	{
		$distritoId		= $this->valida->validaID($_POST['distritoId']);
		$distrito		= $this->valida->validaID($_POST['distrito']);
		
		$resultado	= $this->modelo->Modificar($distritoId,$distrito);
		
		if($resultado){
			echo "Registro modificado";
		}
		else {
			require 'Vista/Error.php';
		}
	}
	
}

?>