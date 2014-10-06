<?php

/**
 * 
 */
class ColoniaMdl{
	
	public $coloniaId;
	public $colonia;
	public $asociacion_colonos;
	public $presidente_colonos;
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
	
	
	function Insertar($coloniaId,$colonia,$asociacion_colonos,$presidente_colonos){
		
		$this->coloniaId		  = $coloniaId;
		$this->colonia			  = $colonia;
		$this->asociacion_colonos = $asociacion_colonos;
		$this->presidente_colonos = $presidente_colonos;
		
		$query = "INSERT INTO `Colonia`(`colonia_id`, `colonia`, `asociacion_colonos`, `presidente_colonos`) 
				  VALUES (".$coloniaId.",'".$colonia."','".$asociacion_colonos."','".$presidente_colonos."');";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("<br/>Pelas puto...");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	
	public function Modificar($coliniaId)
	{
		
	}
	
	public function Eliminar($coloniaId)
	{
		$this->coloniaId = $coloniaId;
		
		$query = "DELETE FROM `Colonia` WHERE `colonia_id` = ".$coloniaId."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	
		
}


?>