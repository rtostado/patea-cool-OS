<?php

class AccionSocialMdl{
	public $ID;
	public $nombre;
	public $fechaInicio;
	public $fechaFin;
	public $descripcion;
	public $calificacion;
	public $numParticipantes;
	public $status;
	public $tipoaccionsocialId;
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
	
	
	public function Insertar($ID,$nombre,$fechaInicio,$fechaFin,$descripcion,$calificacion,$numParticiapantes,$status,$tipoaccionsocialId)
	{
		$this->ID 			   	  = $ID;
		$this->nombre 	  		  = $nombre;
		$this->fechaInicio  	  = $fechaInicio;
		$this->fechaFin  		  = $fechaFin;
		$this->descripcion  	  = $descripcion;
		$this->calificacion	  	  = $calificacion;
		$this->numParticipantes	  = $numParticiapantes;
		$this->status			  =	$status;
		$this->tipoaccionsocialId = $tipoaccionsocialId; 
		
		$query = "INSERT INTO `AccionSocial`(`accionsocial_id`, `nombre`, `fecha_inicio`, `fecha_fin`, `descripcion`, `calificacion`, `num_participantes`, `tipoaccionsocial_id`) 
				  VALUES (".$ID.",'".$nombre."','".$fechaInicio."','".$fechaFin."','".$descripcion."',".$calificacion.",".$numParticiapantes.",'".$status."',".$tipoaccionsocialId.");";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto...");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	public function mostrar(){
		print "ID: $this->ID <br/>";
		print "Nombre: $this->nombre <br/>";
		print "Fecha Inicio: $this->fechaInicio <br/>";
		print "Fecha fin: $this->fechaFin <br/>";
		print "Descripcion: $this->descripcion <br/>";
		print "Calificacion: $this->calificacion <br/>";
		print "Numero de Participantes: $this->numParticipantes <br/>";
		print "Status: $this->status <br/>";
	}
	public function Eliminar($ID)
	{
		$this->ID = $ID;
		
		$query = "DELETE FROM `AccionSocial` WHERE `accionsocial_id` = ".$ID."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	public function actualizar(){}
	
}
?>