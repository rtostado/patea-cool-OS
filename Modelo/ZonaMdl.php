<?php

class ZonaMdl{
	
	public $zonaId;
	public $zona;
	
	public function Insertar($zonaId,$zona)
	{
		$this->zonaId	= $zonaId;
		$this->zona		= $zona;
		
		return TRUE;
	}
	
	public function Eliminar($zonaId)
	{
		
	}
	
	public function Modificar($zonaId)
	{
		
	}
	
}

?>