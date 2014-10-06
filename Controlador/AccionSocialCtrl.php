<?php

class AccionSocialCtrl{
	private $modelo;
	private $valida;
	//constructor
	function __construct(){
		require 'modelo/AccionSocialMdl.php';
		$this->modelo = new AccionSocialMdl();
		require 'aplicacion/Validar.php';
		$this ->valida = new Validar();
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
		$ID					= $this->valida->ValidaID($_POST['ID']); //ejemplo
		$calificacion 	  	= $this->valida->ValidaID($_POST['calificacion']);
		$numParticipantes 	= $this->valida->ValidaID($_POST['numParticipantes']);
		$status 		  	= $this->valida->ValidaTexto($_POST['status']);
		$nombre			  	= $this->valida->ValidaNombre($_POST['nombre']);
		$descripcion	  	= $this->valida->ValidaTexto($_POST['descripcion']);
		$fechaInicio	  	= $this->valida->ValidaFecha($_POST['fechaInicio']);
		$fechaFin		  	= $this->valida->ValidaFecha($_POST['fechaFin']);
		$tipoaccionsocialId = $this->valida->ValidaID($_POST['tipoaccionsocialId']);
		
		$resultado	= $this->modelo->Insertar($ID,$nombre,$fechaInicio,$fechaFin,
											$descripcion,$calificacion,$numParticipantes,$status,$tipoaccionsocialId);
		
		if($resultado){
			require 'vista/AccionInsertada.php';
			//$this->modelo->mostrar();
		}
		else {
			require 'vista/Error.php';
		}
	}
	
	public function Eliminar()
	{
		$ID			= $this->valida->ValidaID($_POST['ID']);
		$resultado 	= $this->modelo->Eliminar($ID);
	}
	
	public function Modificar()
	{
		
	}
}
