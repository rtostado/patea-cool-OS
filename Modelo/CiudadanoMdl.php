<?php

class CiudadanoMdl{
	
	public $num_afiliacion;
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
	public $pass;
	public $bd_driver;
	
	function __construct(){
		require("datebase_config.inc");
		$this->bd_driver = new mysqli ($host,$user,$pass,$bd);
		if($this->bd_driver->connect_error){
			die("No se pudo realizar la coneccion");
		}
		else {
			echo "Si se conecto...";
		}	
	}
	
	
	//
	public function Insertar($num_afiliacion,$nombre,$apellidoP,$apellidoM,$domicilio,$numeroExterior,$fecha_nac,$fecha_afiliacion,$telefono_fijo,
						  $telefono_cel,$estado_civil,$tipo_sangre,$grado_de_estudios,$profesion,$correo,$trabaja_en,$carrera,
						  $pasatiempos,$religion,$reporte,$participo,$zonaId,$coloniaId,$distritoId,$statusId,$TipoMotivoAfiliacionId,$pass,$solicitud_imagen)
	{
		$this->num_afiliacion	= $num_afiliacion;
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
		$this->pass				= $pass;
		$this->solicitud_imagen = $solicitud_imagen;
		
		$query = "INSERT INTO `Ciudadano`(`num_afiliacion`, `nombre`, `apellidopaterno`, `apellidomaterno`, `domicilio`, `numeroexterior`, 
										  `fecha_nac`, `fecha_afiliacion`, `telefono_fijo`, `telefono_cel`, `estado_civil`, `tipo_sangre`, 
										  `correo`, `grado_de_estudios`, `profesion`, `trabaja_en`, `carrera`, `pasatiempos`, `solicitud_imagen`, 
										  `participo`, `reporte`, `pass`, `tipo_motivo_afiliacion_id`, `colonia_id`, `seccion_id`, `distrito_id`, 
										   `status_id`) 
				  VALUES (".$num_afiliacion.",'".$nombre."','".$apellidoP."','".$apellidoM."','".$domicilio."','".$numeroExterior."','".$fecha_nac."',
				  		  '".$fecha_afiliacion."','".$telefono_fijo."','".$telefono_cel."','".$estado_civil."','".$tipo_sangre."','".$correo."',
				  		  '".$grado_de_estudios."','".$profesion."','".$trabaja_en."','".$carrera."','".$pasatiempos."','".$solicitud_imagen."','".$participo."',
				  		  '".$reporte."','".$pass."',".$TipoMotivoAfiliacionId.",".$coloniaId.",".$zonaId.",".$distritoId.",".$status.");";
				  		  
		$result = $this->bd_driver->query($query);
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	
	public function Modificar($num_afiliacion)
	{
		
	}
	
	public function Eliminar($num_afiliacion)
	{
		$this->num_afiliacion = $num_afiliacion;
		
		$query = "DELETE FROM `Ciudadano` WHERE `num_afiliacion` = ".$num_afiliacion."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	
}

?>