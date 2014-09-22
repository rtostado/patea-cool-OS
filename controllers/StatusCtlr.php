<?php

class StatusCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'modelo/StatusMdl.php';
		require 'valida/Validar.php';
		
		$this->modelo = new StatusMdl();
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
		$statusId		= $this->valida->validaID($_POS['statusId']);
		$status			= $this->valida->validaNombre($_POST['status']);
		
		$resultado	= $this->modelo->Insertar($statusId,$status);
		
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