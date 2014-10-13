<?php

class CiudadanoMdl{
		
	public $numAfiliacion;
	public $nombre;
	public $apellidoP;
	public $apellidoM;
	public $domicilio;
	public $numeroExterior;
	public $fechaNac;
	public $fechaAfiliacion;
	public $telefonoFijo;
	public $telefonoCel;
	public $estadoCivil;
	public $tipoSangre;
	public $gradoDeEstudios;
	public $profesion;
	public $correo;
	public $trabajaEn;
	public $carrera;
	public $pasatiempos;
	public $reporte;
	public $participo;
	public $password;
	public $seccionId;
	public $coloniaId;
	public $distritoId;
	public $statusId;
	public $codigoPostal;
	public $TipoMotivoAfiliacionId;
	public $solicitudImagen;
	public $referenciadoPor;
	
	
	function __construct(){
		require("database_config.inc");
		$this->bd_driver = new mysqli ($host,$user,$pass,$bd);
		if($this->bd_driver->connect_error){
			die("No se pudo realizar la coneccion");
		}
		else {
			echo "Si se conecto...";
		}	
	}
	//(
	public function mostrar(){
		print "ID: $this->numAfiliacion<br/>";
		print "Nombre: $this->nombre<br/>";
		print "FechaAfiliacion: $this->fechaAfiliacion<br/>";
	}
	public function Insertar($numAfiliacion,$nombre,$apellidoP,$apellidoM,$domicilio,$numExterior,$fechaNac,$fechaAfiliacion,
							$telefonoFijo,$telefonoCel,$estadoCivil,$tipoSangre,$correo,$gradoDeEstudios,$profesion,$trabajaEn,
							$carrera,$pasatiempos,$solicitudImagen,$participo,$reporte,$password,$TipoMotivoAfiliacionId,
						  	 $coloniaId,$seccionId,$distritoId,$referenciadoPor,$statusId,$codigoPostal){
			
		$this->numAfiliacion    = $numAfiliacion;	
		$this->nombre			= $nombre;			
		$this->apellidoP		= $apellidoP;
		$this->apellidoM		= $apellidoM;  	
		$this->domicilio		= $domicilio;
		$this->numExterior	    = $numExterior;
		$this->fechaNac			= $fechaNac;
		$this->fechaAfiliacion	= $fechaAfiliacion;
		$this->telefonoFijo		= $telefonoFijo;
		$this->telefonoCel		= $telefonoCel;
		$this->estadoCivil		= $estadoCivil;
		$this->tipoSangre		= $tipoSangre;
		$this->gradoDeEstudios= $gradoDeEstudios;
		$this->profesion		= $profesion;
		$this->correo	  		= $correo;
		$this->trabajaEn		= $trabajaEn;
		$this->carrera			= $carrera;
		$this->pasatiempos		= $pasatiempos;
		$this->reporte			= $reporte;
		$this->participo		= $participo;
		$this->password			= $password;
		$this->seccionId		= $seccionId;
		$this->coloniaId		= $coloniaId;
		$this->distritoId		= $distritoId;
		$this->statusId			= $statusId;
		$this->codigoPostal		= $codigoPostal;
		$this->solicitudImagen	= $solicitudImagen;
		$this->TipoMotivoAfiliacionId = $TipoMotivoAfiliacionId; 
		$this->referenciadoPor	= $referenciadoPor;
		
		/*$query = "INSERT INTO `ciudadano`(num_afiliacion,nombre,apellidopaterno,apellidomaterno,domicilio,numeroexterior, 
										  fecha_nac,fecha_afiliacion,telefono_fijo,telefono_cel,estado_civil,tipo_sangre, 
										  correo,grado_de_estudios,profesion,trabaja_en,carrera,pasatiempos,solicitud_imagen, 
										  participo,reporte,pass,tipo_motivo_afiliacion_id,colonia_id,seccion_id,
										  distrito_id,num_afiliacionfk,status_id,codigo_postal) 
				  VALUES (".$numAfiliacion.",'".$nombre."','".$apellidoP."','".$apellidoM."','".$domicilio."',
				  		  '".$numExterior."','".$fechaNac."','".$fechaAfiliacion."','".$telefonoFijo."','".$telefonoCel."',
				  		  '".$estadoCivil."',
				  		  '".$tipoSangre."','".$correo."','".$gradoDeEstudios."','".$profesion."','".$trabajaEn."',
				  		  '".$carrera."','".$pasatiempos."','".$solicitudImagen."','".$participo."',
				  		  '".$reporte."','".$password."',".$TipoMotivoAfiliacionId.",".$coloniaId.",".$seccionId.",
				  		  ".$distritoId.",".$referenciadoPor.",".$statusId.",'".$codigoPostal."');";*/
		$query= "INSERT INTO `ciudadano` (num_afiliacion,nombre,apellidopaterno,apellidomaterno,domicilio,numeroexterior, 
										  fecha_nac,fecha_afiliacion,telefono_fijo,telefono_cel,estado_civil,tipo_sangre, 
										  correo,grado_de_estudios,profesion,trabaja_en,carrera,pasatiempos,solicitud_imagen,
										  participo,reporte,pass,tipo_motivo_afiliacion_id,colonia_id) 
		 VALUES (".$numAfiliacion.",'".$nombre."','".$apellidoP."','".$apellidoM."','".$domicilio."','".$numExterior."',
		 		 '".$fechaNac."','".$fechaAfiliacion."','".$telefonoFijo."','".$telefonoCel."',
				  		  '".$estadoCivil."',
				  		  '".$tipoSangre."','".$correo."','".$gradoDeEstudios."','".$profesion."','".$trabajaEn."',
				  		  '".$carrera."','".$pasatiempos."','".$solicitudImagen."','".$participo."',
				  		  '".$reporte."','".$password."','".$TipoMotivoAfiliacionId."','".$coloniaId."');";
				  		  
		$result = $this->bd_driver->query($query);
		if($this->bd_driver->error){
			$this->mostrar();
			echo("error en la insercion");
		}
		return TRUE;
	}
	
	public function Modificar($numAfiliacion,$nombre,$apellidoP,$apellidoM,$domicilio,$numExterior,$fechaNac,$fechaAfiliacion,
							$telefonoFijo,$telefonoCel,$estadoCivil,$tipoSangre,$correo,$gradoDeEstudios,$profesion,$trabajaEn,
							$carrera,$pasatiempos,$solicitudImagen,$participo,$reporte,$password,$TipoMotivoAfiliacionId,
						  	 $coloniaId,$seccionId,$distritoId,$referenciadoPor,$statusId,$codigoPostal){
			
		$this->numAfiliacion    = $numAfiliacion;	
		$this->nombre			= $nombre;			
		$this->apellidoP		= $apellidoP;
		$this->apellidoM		= $apellidoM;  	
		$this->domicilio		= $domicilio;
		$this->numExterior		= $numExterior;
		$this->fechaNac			= $fechaNac;
		$this->fechaAfiliacion	= $fechaAfiliacion;
		$this->telefonoFijo		= $telefonoFijo;
		$this->telefonoCel		= $telefonoCel;
		$this->estadoCivil		= $estadoCivil;
		$this->tipoSangre		= $tipoSangre;
		$this->gradoDeEstudios= $gradoDeEstudios;
		$this->profesion		= $profesion;
		$this->correo	  		= $correo;
		$this->trabajaEn		= $trabajaEn;
		$this->carrera			= $carrera;
		$this->pasatiempos		= $pasatiempos;
		$this->reporte			= $reporte;
		$this->participo		= $participo;
		$this->password			= $password;
		$this->seccionId		= $seccionId;
		$this->coloniaId		= $coloniaId;
		$this->distritoId		= $distritoId;
		$this->statusId			= $statusId;
		$this->codigoPostal		= $codigoPostal;
		$this->solicitudImagen	= $solicitudImagen;
		$this->TipoMotivoAfiliacionId = $TipoMotivoAfiliacionId; 
		$this->referenciadoPor	= $referenciadoPor;
		
		$query = "UPDATE `ciudadano` SET nombre = '".$nombre."',apellidopaterno = '".$apellidoP."',
			apellidomaterno = '".$apellidoM."', domicilio = '".$domicilio."',numeroexterior = '".$numeroExterior."',
			fecha_nac = '".$fechaNac."', fecha_afiliacion = '".$fechaAfiliacion."', telefono_fijo = '".$telefonoFijo."',
			telefono_cel = '".$telefonoCel."', estado_civil = '".$estadoCivil."', tipo_sangre = '".$tipoSangre."',
			grado_de_estudios = '".$gradoDeEstudios."', profesion = '".$profesion."', correo = '".$correo."',
			trabaja_en = '".$trabajaEn."', carrera = '".$carrera."', pasatiempos = '".$pasatiempos."',
			reporte = '".$reporte."', participo = '".$participo."', pass = '".$password."',
			seccion_id = '".$seccionId."', colonia_id = '".$coloniaId."', distrito_id = '".$distritoID."',
			status_id = '".$statusId."', codigo_postal = '".$codigoPostal."', solicitud_imagen = '".$solicitudImagen."',
			tipo_motivo_afiliacion_id = '".$TipoMotivoAfiliacionId."', 
			num_filiacionfk = '".$referenciadoPor."' WHERE num_afiliacion = ".$numAfiliacion."";
		$result = $this->bd_driver->query($query);
		if($this->bd_driver->error){
			die("Pelas");
		}
		return TRUE;
	}
	
	public function Eliminar($num_afiliacion)
	{
		$this->num_afiliacion = $num_afiliacion;
		
		$query = "DELETE FROM `Ciudadano` WHERE `num_afiliacion` = ".$num_afiliacion."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		return TRUE;
	}
	
}

?>