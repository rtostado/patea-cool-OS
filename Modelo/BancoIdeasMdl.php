<?php
class BancoIdeasMdl{
	
	private $bancodeideas_id;
	private $nombre;
	private $descripcion;
	//private $status;
	private $ciudadano_num_afiliacion;
	private $bd_driver;
	
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
	
	
	
	//
	public function Insertar($bancodeideas_id,$nombre,$descripcion,/*$status,*/$ciudadano_num_afiliacion)
	{
		$this->$bancodeideas_id			= $bancodeideas_id;
		$this->nombre 					= $nombre;
		$this->descripcion  			= $descripcion;
		//$this->status  					= $status;
		$this->ciudadano_num_afiliacion = $ciudadano_num_afiliacion;
		
		$query = "INSERT INTO `bancodeideas`(`banco_ideas_id`, `nombre`, `descripcion`, `num_afiliacion`)
				  VALUES(".$bancodeideas_id.",'".$nombre."','".$descripcion."',".$ciudadano_num_afiliacion.");";
		
		$resultado = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("la insercion no se pudo realizar");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	public function mostrar(){
		print "Nombre: $this->nombre<br/>";
		print "Descripcion: $this->descripcion<br/>";
		//print "Status: $this->status";
		
	}
	
	public function Eliminar($ID)
	{
		$this->ID = $ID;
		
		$query = "DELETE FROM `bancodeideas` WHERE `banco_ideas_id` = ".$ID."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	public function Modificar(){
		$this->$bancodeideas_id			= $bancodeideas_id;
		$this->nombre 					= $nombre;
		$this->descripcion  			= $descripcion;
		//$this->status  					= $status;
		$this->ciudadano_num_afiliacion = $ciudadano_num_afiliacion;
		
		$query = "UPDATE `bancodeideas` SET `nombre`='".$nombre."', `descripcion`'".$descripcion."',
		`num_afiliacion`= ".$ciudadano_num_afiliacion." WHERE `banco_ideas_id` = ".$bancodeideas_id.",);";
		
		$resultado = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("la insercion no se pudo realizar");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	
	
	
}
?>