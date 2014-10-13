<?php

class StatusCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'Modelo/StatusMdl.php';
		require 'aplicacion/Validar.php';
		
		$this->modelo = new StatusMdl();
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
		$statusId		= $this->valida->validaID($_POST['statusId']);
		$status			= $this->valida->validaNombre($_POST['status']);
		
		$resultado	= $this->modelo->Insertar($statusId,$status);
		
		if($resultado){
			require 'Vista/InsercionCorrecta.php';
		}
		else {
			require 'Vista/Error.php';
		}
	}
	
	public function Eliminar()
	{
		$statusId	= $this->valida->validaID($_POST['statusId']);
		$resultado 	= $this->modelo->Eliminar($statusId);
		if($resultado){
			echo "Registro eliminado";
		}
	}
	
	public function Modificar()
	{
		$statusId		= $this->valida->validaID($_POST['statusId']);
		$status			= $this->valida->validaNombre($_POST['status']);
		
		$resultado	= $this->modelo->Insertar($statusId,$status);
		
		if($resultado){
			echo "Registro modificado";
		}
		else {
			require 'Vista/Error.php';
		}
	}
	
}

?>