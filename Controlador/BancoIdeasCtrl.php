<?php

class BancoIdeasCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'Modelo/BancoIdeasMdl.php';
		$this->modelo = new BancoIdeasMdl();
		require 'aplicacion/Validar.php';
		$this->valida=new Validar();
	}
	
	//se inicia la ejecucion del
	function run(){
		switch ($_POST['act']) {
			case 'crear':
				$this->crear();				
				break;
			
			default:
				
				break;
		}
	}
	
	//se asigna a cada variable su valor correcto (ya validado)
	private function crear()
	{
		$status="planeacion";//ejemplo
		$nombre	= $this->valida->ValidaNombre($_POST['nombre']);
		$descripcion	= $this->valida->ValidaTexto($_POST['descripcion']);		
		$resultado	= $this->modelo->crear($nombre,$descripcion,$status);
		
		if($resultado){
			require 'Vista/IdeaInsertada.php';
			$this->modelo->mostrar();
		}
		else {
			require 'Vista/Error.php';
		}
	}
}