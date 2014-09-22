<?php

/**
 * 
 */
class ColoniaMdl{
	
	public $coloniaId;
	public $colonia;
	
	
	function Insertar($coloniaId,$colonia){
		
		$this->coloniaId	= $coloniaId;
		$this->colonia		= $colonia;
		
		return TRUE;
	}
	
	public function Modificar($coliniaId)
	{
		
	}
	
	public function Eliminar($coloniaId)
	{
		
	}
	
		
}


?>