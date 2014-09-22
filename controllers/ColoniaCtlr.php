<?php

class ColoniaCtrl{
	private $modelo;
	private $valida;
	
	
	//constructor
	function __construct(){
		require 'valida/Validar.php';
		require 'modelo/ColoniaMdl.php';
		
		$this->modelo = new ColoniaMdl();
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
		$coloniaId		= $this->valida->validaID($_POS['coloniaId']);
		$colonia		= $this->valida->validaNombre($_POST['colonia']);
		
		$resultado	= $this->modelo->Insertar($coloniaId,$colonia);
		
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