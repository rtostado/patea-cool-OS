<?php

class CiudadanoMdl{
	
	public $nombre;
	public $apellidoP;
	public $apellidoM;
	public $domicilio;
	public $numeroExterior;
	public $fecha_nac;
	public $fecha_afiliacion;
	public $telefono_fijo;
	public $telefono_cel;
	public $estado_civil;
	public $tipo_sangre;
	public $grado_de_estudios;
	public $profesion;
	public $correo;
	public $trabaja_en;
	public $carrera;
	public $pasatiempos;
	public $religion;
	public $reporte;
	public $participo;
	public $zonaId;
	public $coloniaId;
	public $distritoId;
	public $statusId;
	public $TipoMotivoAfiliacion;
	
	//
	public function Insertar($nombre,$apellidoP,$apellidoM,$domicilio,$numeroExterior,$fecha_nac,$fecha_afiliacion,$telefono_fijo,
						  $telefono_cel,$estado_civil,$tipo_sangre,$grado_de_estudios,$profesion,$correo,$trabaja_en,$carrera,
						  $pasatiempos,$religion,$reporte,$participo,$zonaId,$coloniaId,$distritoId,$statusId,$TipoMotivoAfiliacionId)
	{
		$this->nombre 	  		= $nombre;
		$this->apellidoP  		= $apellidoP;
		$this->apellidoM  		= $apellidoM;
		$this->domicilio  		= $domicilio;
		$this->numeroExterior	= $numeroExterior;
		$this->fecha_nac		= $fecha_nac;
		$this->fecha_afiliacion	= $fecha_afiliacion;
		$this->telefono_fijo	= $telefono_fijo;
		$this->telefono_cel		= $telefono_cel;
		$this->estado_civil		= $estado_civil;
		$this->tipo_sangre		= $tipo_sangre;
		$this->grado_de_estudios= $grado_de_estudios;
		$this->profesion		= $profesion;
		$this->correo	  		= $correo;
		$this->trabaja_en		= $trabaja_en;
		$this->carrera			= $carrera;
		$this->pasatiempos		= $pasatiempos;
		$this->religion			= $religion;
		$this->reporte			= $reporte;
		$this->participo		= $participo;
		$this->zonaId			= $zonaId;
		$this->coloniaId		= $coloniaId;
		$this->distritoId		= $distritoId;
		$this->statusId			= $statusId;
		$this->TipoMotivoAfiliacionId = $TipoMotivoAfiliacionId; 
		
		return TRUE;
	}
	
	public function Modificar($num_afiliacion)
	{
		
	}
	
	public function Eliminar($num_afiliacion)
	{
		
	}
	
}

?>