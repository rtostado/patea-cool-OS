<?php

class AccionSocialMdl{
	private $ID;
	private $nombre;
	private $fechaInicio;
	private $fechaFin;
	private $descripcion;
	private $calificacion;
	private $numParticipantes;
	private $status;
	
	//
	public function crear($ID,$nombre,$fechaInicio,$fechaFin,$descripcion,$calificacion,$numParticiapantes,$status)
	{
		$this->ID;
		$this->nombre 	  = $nombre;
		$this->fechaInicio  = $fechaInicio;
		$this->fechaFin  = $fechaFin;
		$this->descripcion  = $descripcion;
		$this->calificacion	  = $calificacion;
		$this->numParticipantes	  = $numParticiapantes;
		$this->status	=	$status;
		return TRUE;
	}
	public function mostrar(){
		print $this->ID;
		print $this->nombre;
		print $this->fechaInicio;
		print $this->fechaFin;
		print $this->descripcion;
		print $this->calificacion;
		print $this->numParticipantes;
		print $this->status;
	}
	public function eliminar(){}
	public function actualizar(){}
	
}
?>