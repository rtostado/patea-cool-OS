<?php
class TipoAccionSocialMdl{

	private $ID;		
	private $tipoAccionSocial;
	private $bd_driver;
	
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
	
	public function Insertar($ID,$tipoAccionSocial){
		$this ->ID=$ID;
		$this ->tipoAccionSocial= $tipoAccionSocial;
		
		$query = "INSERT INTO `TipoAccionSocial`(`tipoaccionsocial_id`, `tipoaccionsocial`)
				  VALUES(".$ID.",'".$tipoAccionSocial."');";
				  
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("pelas puto");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	public function mostrar(){
		print "ID: $this->ID<br/>";
		print "Tipo de Accion Social: $this->tipoAccionSocial<br/>";
	}
	public function Eliminar($ID)
	{
		$this->ID = $ID;
		
		$query = "DELETE FROM `TipoAccionSocial` WHERE `tipoaccionsocial_id` = ".$ID."";
		
		$result = $this->bd_driver->query($query);
		
		if($this->bd_driver->error){
			die("error en la insercion");
		}
		
		mysqli_close($bd_driver);
		return TRUE;
	}
	public function actualizar(){
		
	}
}
?>
