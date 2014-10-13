<?php

class AccionSocialCtrl{
	private $modelo;
	private $valida;
	//constructor
	function __construct(){
		require 'Modelo/AccionSocialMdl.php';
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
		$nombre=null;
		$calificacion=null;
		$descripcion=null;
		$numParticipantes=null;
		$fechaInicio=null;
		$fechaFin=null;
		$tipoaccionsocialId=null;
		
		$accionId		= $this->valida->ValidaID($_POST['accionId']); //ejemplo
		if(isset($_POST['calificacion']))
			$calificacion 	  	= $this->valida->ValidaID($_POST['calificacion']);
		if(isset($_POST['numParticipantes']))
		$numParticipantes 	= $this->valida->ValidaID($_POST['numParticipantes']);
		//$status 		  	= $this->valida->ValidaTexto($_POST['status']);
		if(isset($_POST['nombre']))
			$nombre			  	= $this->valida->ValidaNombre($_POST['nombre']);
		if(isset($_POST['descripcion']))
			$descripcion	  	= $this->valida->ValidaTexto($_POST['descripcion']);
		if(isset($_POST['fechaInicio']))
			$fechaInicio	  	= $this->valida->ValidaFecha($_POST['fechaInicio']);
		if(isset($_POST['fechaFin']))
			$fechaFin		  	= $this->valida->ValidaFecha($_POST['fechaFin']);
		if(isset($_POST['tipoaccionsocialId']))
			$tipoaccionsocialId = $this->valida->ValidaID($_POST['tipoaccionsocialId']);
		
		$resultado	= $this->modelo->Insertar($accionId, $nombre, $fechaInicio, $fechaFin, $descripcion,
					 $calificacion, $numParticipantes, $tipoaccionsocialId);
		
		if($resultado){
			require 'Vista/AccionInsertada.php';
			//$this->modelo->mostrar();
		}
		else {
			require 'Vista/Error.php';
		}
	}
	
	public function Eliminar()
	{
		$ID			= $this->valida->ValidaID($_POST['ID']);
		$resultado 	= $this->modelo->Eliminar($ID);
		if($resultado){
			echo "Registro eliminado";
		}
	}
	
	public function Modificar()
	{
		$nombre=null;
		$calificacion=null;
		$descripcion=null;
		$numParticipantes=null;
		$fechaInicio=null;
		$fechaFin=null;
		$tipoaccionsocialId=null;
		
		$accionId		= $this->valida->ValidaID($_POST['accionId']); //ejemplo
		if(isset($_POST['calificacion']))
			$calificacion 	  	= $this->valida->ValidaID($_POST['calificacion']);
		if(isset($_POST['numParticipantes']))
		$numParticipantes 	= $this->valida->ValidaID($_POST['numParticipantes']);
		//$status 		  	= $this->valida->ValidaTexto($_POST['status']);
		if(isset($_POST['nombre']))
			$nombre			  	= $this->valida->ValidaNombre($_POST['nombre']);
		if(isset($_POST['descripcion']))
			$descripcion	  	= $this->valida->ValidaTexto($_POST['descripcion']);
		if(isset($_POST['fechaInicio']))
			$fechaInicio	  	= $this->valida->ValidaFecha($_POST['fechaInicio']);
		if(isset($_POST['fechaFin']))
			$fechaFin		  	= $this->valida->ValidaFecha($_POST['fechaFin']);
		if(isset($_POST['tipoaccionsocialId']))
			$tipoaccionsocialId = $this->valida->ValidaID($_POST['tipoaccionsocialId']);
		
		$resultado	= $this->modelo->Modificar($accionId, $nombre, $fechaInicio, $fechaFin, $descripcion,
					 $calificacion, $numParticipantes, $tipoaccionsocialId);
		
		if($resultado){
			echo "Registro modificado";
			//$this->modelo->mostrar();
		}
		else {
			require 'Vista/Error.php';
		}
	}
}
