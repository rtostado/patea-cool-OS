<?php

class ColoniaCtrl{
	private $modelo;
	private $valida;
	
	
	//constructor
	function __construct(){
		require 'aplicacion/Validar.php';
		require 'Modelo/ColoniaMdl.php';
		
		$this->modelo = new ColoniaMdl();
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
		$coloniaId			= $this->valida->ValidaID($_POST['coloniaId']);
		$colonia			= $this->valida->ValidaNombre($_POST['colonia']);
		$asociacion_colonos = $this->valida->ValidaTexto($_POST['asociacion_colonos']);
		$presidente_colonos = $this->valida->ValidaTexto($_POST['presidente_colonos']);
		
		$resultado	= $this->modelo->Insertar($coloniaId,$colonia,$asociacion_colonos,$presidente_colonos);
		
		if($resultado){
			require 'Vista/InsercionCorrecta.html';
		}
		else {
			require 'Vista/Error.html';
		}
	}
	
	public function Eliminar()
	{
		$coloniaId	= $this->valida->ValidaID($_POST['coloniaId']);
		$resultado 	= $this->modelo->Eliminar($coloniaId);
	}
	
	public function Modificar()
	{
		
	}
}

?>