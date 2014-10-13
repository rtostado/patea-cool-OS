<?php
class ZonaMdl{
	
	public $zonaId;
	public $zona;
	public $bd_driver;
	
	function __construct(){
		require("database_config.inc");
		$this->bd_driver = new mysqli($host,$user,$pass,$bd);
		if($this->bd_driver->connect_error){
			die("No se pudo realizar la coneccion");
		}
		else {
			echo "Conexion exitosa...";
		}	
	}
	
	
	function Insertar($zonaId,$zona){
		
		$this->zonaId	= $zonaId;
		$this->zona		= $zona;
		
		$query = "INSERT INTO `zona`(seccion_id, seccion) VALUES(".$zonaId.",'".$zona."');";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	
	public function Eliminar($zonaId)
	{
		$this->zonaId	= $zonaId;
		
		$query = "DELETE FROM `Zona` WHERE `seccion_id` = ".$zonaId."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la eliminacion");
		}
		return TRUE;
	}
	
	public function Modificar($zonaId, $zona){
		$this->zonaId	= $zonaId;
		$this->zona		= $zona;
		
		$query = "UPDATE `zona` SET seccion = ".$zona." WHERE seccion_id = ".$zonaId.";";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	
}

?>