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
	
	//se asigna a cada variable su valor correcto (ya validado)
	private function Insertar()
	{
		//$status					  = $this->valida->ValidaTexto($_POST['status']);//ejemplo
		$nombre					  = $this->valida->ValidaNombre($_POST['nombre']);
		$descripcion	 		  = $this->valida->ValidaTexto($_POST['descripcion']);
		$ciudadano_num_afiliacion = $this->valida->ValidaID($_POST['ciudadano_num_afiliacion']);
		
		$resultado	= $this->modelo->Insertar($nombre,$descripcion,/*$status,*/$ciudadano_num_afiliacion);
		
		if($resultado){
			require 'Vista/IdeaInsertada.php';
			//$this->modelo->mostrar();
		}
		else {
			require 'Vista/Error.php';
		}
	}

	public function Eliminar()
	{
		$ciudadano_num_afiliacion = $this->valida->ValidaID($_POST['ciudadano_num_afiliacion']);
		$resultado 	= $this->modelo->Eliminar($ciudadano_num_afiliacion);
	}
	
	public function Modificar()
	{
		
	}
	
}