<?php

class DistritoMdl{
	
	public $distritoId;
	public $distrito;
	
	public function Insertar($distritoId,$distrito)
	{
		$this->distritoId	= $distritoId;
		$this->distrito		= $distrito;
		
		return TRUE;
	}
	
	public function Eliminar($distritoId)
	{
		
	}
	
	public function Modificar($distritoId)
	{
		
	}
	
}

?>