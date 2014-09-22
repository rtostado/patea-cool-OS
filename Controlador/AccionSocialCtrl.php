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
			case 'crear':
				$this->crear();				
				break;
			case 'eliminar':
				$this -> eliminar();
				break;
			case 'actualzar':
				$this -> actualizar();
				break;
			
			default:
				
				break;
		}
	}
	//se asigna a cada variable su valor correcto (ya validado)
	private function crear()
	{
		$ID=5; //ejemplo
		$calificacion=10;//ejemplo
		$numParticipantes=111;//ejemplo
		$status="terminado";//ejemplo
		$nombre		= $this->valida->ValidaNombre($_POST['nombre']);
		$descripcion	= $this->valida->ValidaTexto($_POST['descripcion']);
		$fechaInicio	= $this->valida->ValidaFecha($_POST['fechaInicio']);
		$fechaFin	= $this->valida->ValidaFecha($_POST['fechaFin']);
		
		$resultado	= $this->modelo->crear($ID,$nombre,$fechaInicio,$fechaFin,
											$descripcion,$calificacion,$numParticipantes,$status);
		
		if($resultado){
			require 'vista/AccionInsertada.php';
			$this->modelo->mostrar();
		}
		else {
			require 'vista/Error.php';
		}
	}
}
