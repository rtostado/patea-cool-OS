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
		$coloniaId		= $this->valida->validaID($_POST['coloniaId']);
		$colonia		= $this->valida->validaNombre($_POST['colonia']);
		
		$resultado	= $this->modelo->Insertar($coloniaId,$colonia);
		
		if($resultado){
			require 'Vista/InsercionCorrecta.html';
		}
		else {
			require 'Vista/Error.html';
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