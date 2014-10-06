<?php

class StatusMdl{
	
	public $statusId;
	public $status;
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
	
	public function Insertar($statusId,$status)
	{
		$this->statusId	= $statusId;
		$this->status	= $status;
		
		$query = "INSERT INTO `Status`(`status_id`, `status`)
				  VALUES(".$statusId.",'".$status."');";  
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	
	public function Eliminar($statusId)
	{
		$this->statusId	= $statusId;
		
		$query = "DELETE FROM `Status` WHERE `status_id` = ".$statusId."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	
	public function Modificar($statusId)
	{
		
	}
	
}

?>