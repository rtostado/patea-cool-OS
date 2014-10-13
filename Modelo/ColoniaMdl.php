<?php

/**
 * 
 */
class ColoniaMdl{
	
	public $coloniaId;
	public $colonia;
	public $asociacion_col;
	public $presidente_col;
	public $bd_driver;

	function __construct(){
		require("database_config.inc");
		$this->bd_driver = new mysqli($host,$user,$pass,$bd);
		if($this->bd_driver->connect_error){
			die("No se pudo realizar la conexion");
		}else{
			echo "Conexion exitosa...";
		}
	}
	function Insertar($coloniaId,$colonia,$asociacion_col,$presidente_col){
		$this->coloniaId	= $coloniaId;
		$this->colonia		= $colonia;
		$this->asociacion_col=$asociacion_col;
		$this->presidente_col = $presidente_col;
		
		$query = "INSERT INTO `colonia`(colonia_id,colonia,asociacion_colonos,presidente_colonos)
				  VALUES(".$coloniaId.",'".$colonia."','".$asociacion_col."','".$presidente_col."');";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("<br/>Pelas puto...");
		}
		return TRUE;
	}
	public function mostrar(){
		print "ID: $this->coloniaId<br/>";
		print "Nombre: $this->colonia<br/>";
		print "Asociacion colonos: $this->asociacion_col<br/>";
		print "Presidente colonos: $this->presidente_col<br/>";
	}
	
	public function Eliminar($coloniaId){
		$query = "DELETE FROM `colonia` WHERE colonia_id = ".$coloniaId."";
		$result = $this->bd_driver->query($query);
		if($this->bd_driver->error){
			die("Pelas");
		}
		return TRUE;
	}
	public function Modificar($coloniaId, $colonia, $asociacion_col, $presidente_col){
		$this->coloniaId	= $coloniaId;
		$this->colonia		= $colonia;
		$this->asociacion_col=$asociacion_col;
		$this->presidente_col = $presidente_col;
		
		$query = "UPDATE `colonia` SET colonia = '".$colonia."',asociacion_colonos = '".$asociacion_col."',
			presidente_colonos = '".$presidente_col."' WHERE colonia_id = ".$coloniaId."";
		$result = $this->bd_driver->query($query);
		if($this->bd_driver->error){
			die("Pelas");
		}
		return TRUE;
	}
	
		
}
?>