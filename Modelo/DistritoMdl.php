<?php

class DistritoMdl{
	
	public $distritoId;
	public $distrito;
	public $bd_driver;
	
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
	
	public function Insertar($distritoId,$distrito)
	{
		$this->distritoId	= $distritoId;
		$this->distrito		= $distrito;
		
		$query = "INSERT INTO `distrito`(`distrito_id`, `distrito`)
				  VALUES(".$distritoId.",'".$distrito."');"; 
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	
	public function Eliminar($ID)
	{
		$this->distritoId	= $distritoId;
		
		$query = "DELETE FROM `Distrito` WHERE `distrito_id` = ".$distritoId."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la eliminacion");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	
	public function Modificar($distritoId)
	{
		$this->distritoId	= $distritoId;
		$this->distrito		= $distrito;
		
		$query = "UPDATE `distrito` SET distrito = '".$distrito."' WHERE distrito_id = ".$distritoId."";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	
}

?>