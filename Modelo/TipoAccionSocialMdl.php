<?php
class TipoAccionSocialMdl{

	private $tipoAccionSocialIs;		
	private $tipoAccionSocial;
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
	
	public function Insertar($tipoAccionSocialId,$tipoAccionSocial){
		$this ->tipoAccionSocialId=$tipoAccionSocialId;
		$this ->tipoAccionSocial= $tipoAccionSocial;
		
		$query = "INSERT INTO `tipoAccionSocial`(`tipoaccionsocial_id`, `tipoaccionsocial`)
				  VALUES(".$tipoAccionSocialId.",'".$tipoAccionSocial."');";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	public function mostrar(){
		print "ID: $this->ID<br/>";
		print "Tipo de Accion Social: $this->tipoAccionSocial<br/>";
	}
	public function Eliminar($ID)
	{
		$this->tipoAccionSocialId = $ID;
		
		$query = "DELETE FROM `TipoAccionSocial` WHERE `tipoaccionsocial_id` = ".$ID."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
	public function Modificar($tipoAccionSocialId, $tipoAccionSocial){
		$this ->tipoAccionSocialId=$tipoAccionSocialId;
		$this ->tipoAccionSocial= $tipoAccionSocial;
		
		$query = "UPDATE `TipoAccionSocial` SET tipoaccionsocial = '".$tipoAccionSocial."' 
			WHERE tipoaccionsocial_id ".$tipoAccionSocialId."";
				  
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		//mysqli_close($bd_driver);
		return TRUE;
	}
}
?>
